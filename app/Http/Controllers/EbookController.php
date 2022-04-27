<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Traits\Generics;
use App\Traits\EbookHandler;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DOMDocument;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;

use App\Models\User;
use App\Models\Ecover;
use App\Models\Ebook;
use App\Models\SelectedChapter;
use App\Models\ArticleSelect;
use App\Models\AdminEcover;
use App\Models\ChapterAttribute;

class EbookController extends Controller
{
    function __construct(Ecover $ecover)
    {
        $this->ecover = $ecover;
        
    }

    use Generics, EbookHandler;

    //ebook landing pg, whr we select type to create
    public function ebookCreator()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $user = auth()->user();

        $dfyChapters = [];
        $dfyChapters = Ebook::all();
        return view('front.ebook.ebookCreator', compact('dfyChapters'));
    }

    //By Article
    public function articlesPost(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
      $data = $request->all();

        $rules = array(
            'keywords' => 'required|string',
            'repository' => 'required',
            'match' => 'required',
            'collect' => 'required',
        );
        $messages = [
            'keywords.required' => '* This field is required',
            'keywords.string'   => 'Invalid Characters',

            'repository.required' => '* This field is required',
            'match.required' => '* This field is required',
            'collect.required' => '* This field is required',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {

            try {
                
                $result_count = collect($this->fetchArticles($data['keywords']))->count();

                if($result_count > 0){
     
                 $result = collect($this->fetchArticles($data['keywords']))->random($data['collect'])->all();
     
                 Session::put('result', $result);
                 Session::put('keywords', $data['keywords']);
     
                 return redirect()->route('articlesFromApi');
                }
     
                Alert::success('Try similar keyword(s)', '');
                return back();

            } catch (\Throwable $th) {
                Alert::success('Server Error', '');
                return back();
            }

           

        }
    }

    //articlesFromApi
    public function articlesFromApi()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $result = Session::get('result');
        $keywords = Session::get('keywords');

        return view('front.ebook.article.articlesFromApi', compact('result', 'keywords'));
    }

    //post request from articlesFromApi pg
    public function articlesFromApiPost(Request $request)
    {
        $data = $request->all();

        if (!isset($data['articleChecked'])) {
            Alert::success('Please select article', '');
            return back();
        }
        $userId = auth()->user()->id;
        $keywords = Session::get('keywords');

        foreach ($data['articleChecked'] as $key => $val) {
            if (!empty($val)) {
                $selectedChapter = new SelectedChapter();
                $selectedChapter->created_by = $userId;
                $selectedChapter->chapter_type = 'article';
                $selectedChapter->keywords = $keywords; //changeable
                $selectedChapter->title = $data['title'][$key];
                $selectedChapter->author = $data['author'][$key];
                $selectedChapter->description = $data['description'][$key];
                $selectedChapter->is_updated = "false"; //shows it hs been edited in pg-builder
                $selectedChapter->save();
            }
        }
        return redirect()->route('articleSetUp');
    }

    //setUpPage. from here we regenerate PDF
    public function articleSetUp()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        //to be used in setUpPage
        $keywords = Session::get('keywords');
        $userId = auth()->user()->id;

        $dfyChapters = [];
        $adminEcovers = AdminEcover::where('status', 'true')->get();

        $selectedChapters = [];
        $selectedChapters = SelectedChapter::where(['created_by'=>$userId, 'chapter_type'=>'article', 'keywords'=>$keywords])->get();

        if($selectedChapters->count() > 0 ){
            $view = [
                'selectedArticles' => collect(ArticleSelect::where('created_by', auth()->user()->id)->where('keywords', $keywords)->get()),
                'dfyChapters' => $dfyChapters,
                'ecoverList' => $adminEcovers,
                'keywords' => $keywords,
                'isUpdated' => 'true',
                'selectedChapters' => $selectedChapters
            ];
            return view('front.ebook.article.articleSetUp', $view);
        }
        return view('front.ebook.article.articleSetUp', $view);
    }

    //after clicking regenerate btn
    public function articleSetUpPost(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $data = $request->all();
        Session::put('whole_data', $data);

        $userId = auth()->user()->id;

        $rules = array(
            'title' => 'required',
            'ebook_author' => 'required',
        );
        $messages = [
            'title.required' => '* This field is required',
            'ebook_author.required' => '* This field is required',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {
            $this->generalSetUp($data, 'article', $userId);
            return redirect()->route('library');
        }
    
        
    }

    ///////MANUAL EBOOK//////////////////////////////////////////////////////////////////////////////////////////////////

    public function manualEbook(Request $request)
    {
        $data = $request->all();

        $rules = array(
            'keywords' => 'required|string',
        );
        $messages = [
            'keywords.required' => '* This field is required',
            'keywords.string'   => 'Invalid Characters',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {

            $keywords = $data['keywords'];
            Session::put('keywords', $keywords);
            return redirect()->route('manualSetUp');
        }
    }

    //manualSetUp
    public function manualSetUp()
    {
        //return $_COOKIE['chapter_type'];
        $userId = auth()->user()->id;
        //Session::flush();
        $keywords = '';
        if (!empty(Session::get('keywords'))) {
            $keywords = Session::get('keywords');
        }

        $copiedChapterArr = [];
        if (!empty(Session::get('copiedChapterArr'))) {
            $copiedChapterArr = Session::get('copiedChapterArr');
        }

        $selectedChapters = [];
        $selectedChapters = SelectedChapter::where(['created_by'=>$userId, 'chapter_type'=>'manual', 'keywords'=>$keywords])->get();

        //avoid duplicate records
        //$dfyChapters = $dfyChapters->unique('article_title')->values()->all();

        $ecoverList = Ecover::all();

        $data = [
            // 'selectedArticles' => collect($copiedChapterArr)->unique('article_title')->values()->all(),
            'selectedArticles' => [],
            //'fonts_family' => $fonts_family,
            'selectedChapters' => $selectedChapters,
            'ecoverList' => $ecoverList,
            'keywords' => $keywords
        ];
        return view('front.ebook.manual.manualSetUp', $data);
    }

    //manualSetUpPost
    public function manualSetUpPost(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $data = $request->all();
        Session::put('whole_data', $data);

        $userId = auth()->user()->id;

        $rules = array(
            'title' => 'required',
            'ebook_author' => 'required',
        );
        $messages = [
            'title.required' => '* This field is required',
            'ebook_author.required' => '* This field is required',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {
            $this->generalSetUp($data, 'manual', $userId);
            return redirect()->route('library');
        }
    
        
    }

    ////////URL EBOOK/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //scrapping website
    public function fetchArticleFromUrl(Request $request)
    {
        $data = $request->all();
        $rules = array(
            'site_url' => 'required',
        );
        $messages = [
            'site_url.required' => '* This field is required',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {

            $result = $this->fetchArticlesFromUrl($data['site_url']);
            // $result = [
                	
            //     'url'=>"https://www.xyz.com",
            //     'status'=>"COMPLETE",
            //     'status_code'=>200,
            //     'domain'=>"www.xyz.com",
            //     'title'=>"\"Time is not on our side\" WHO confirms Ebola outbreak in Africa after second person dies from the disease",
            //     'author'=>[],
            // ];
            !empty($result['url']) ? Session::put('site_url', $result['url']) : Session::put('site_url', "");
            !empty($result['title']) ? Session::put('site_title', $result['title']) : Session::put('site_title', "");
            !empty($result['author']) ? Session::put('site_author', $result['author'][0]) : Session::put('site_author', "");
            // Session::put('site_author', $result['author'][0]);

            $html = $result['html'];
            $scriptlessHtml = $this->removeTags($html, 'script');
            $noscriptlessHtml = $this->removeTags($scriptlessHtml, 'noscript');
            $headerlessHtml = $this->removeTags($noscriptlessHtml, 'header');
            $headlessHtml = $this->removeTags($headerlessHtml, 'head');
            $footerlessHtml = $this->removeTags($headlessHtml, 'footer');
            $imglessHtml = $this->removeTags($footerlessHtml, 'img');
            $svglessHtml = $this->removeTags($imglessHtml, 'svg');
            $bodyContent = preg_match("/<body[^>]*>(.*?)<\/body>/is", $svglessHtml, $matches);
            $bodyContent = $matches[1];
            
            $stripTags = trim(nl2br(strip_tags($bodyContent))); //remove comments slashes
            Session::put('url_articles', $stripTags);

            return redirect()->route('urlGrab');
        }
    }

    public function removeTags($html, $tag) {
        $dom = new DOMDocument();
        $dom->loadHTML($html, LIBXML_NOERROR);
        foreach (iterator_to_array($dom->getElementsByTagName($tag)) as $item) {
            $item->parentNode->removeChild($item);
        }
        return $dom->saveHTML();
    }

    //urlGrab. extracts from url
    public function urlGrab()
    {
        $url_articles = '';
        if (Session::get('url_articles')) {
            $url_articles = Session::get('url_articles');
        }
        if (Session::get('site_url')) {
            $site_url = Session::get('site_url');
        }
        if (Session::get('site_title')) {
            $site_title = Session::get('site_title');
        }
        if (Session::get('site_author')) {
            $site_author = Session::get('site_author');
        } else {
            $site_author = 'the author';
        }
        //preg_match('/<div class="article-title-outer">(.*?)<\/div>/s', $htmlContent, $titleArray);
        

        return view('front.ebook.url.urlGrab', compact('url_articles', 'site_url', 'site_title', 'site_author'));
    }

    public function urlGrabPost(Request $request)
    {
        $userId = auth()->user()->id;
        $data = $request->all();
        if (empty(Session::get('url_articles'))) {
            return;
        }
        if (empty($data['site_url'])) {
            return;
        }
        if (empty($data['site_content'])) {
            return;
        }
        
        if (Session::get('site_title')) {
            $site_title = Session::get('site_title');
        }
        if (Session::get('site_author')) {
            $site_author = Session::get('site_author');
        } else {
            $site_author = 'the author';
        }
      $url_articles = Session::get('url_articles');
      $site_url = Session::put('site_url',$data['site_url']);
      $keywords = Session::put('keywords','keywords url');
    
    
        $selectedChapter = new SelectedChapter();
        $selectedChapter->created_by = $userId;
        $selectedChapter->chapter_type = 'url';
        $selectedChapter->keywords = 'keywords url'; //changeable
        $selectedChapter->url = $data['site_url'];
        $selectedChapter->title = $site_title;
        $selectedChapter->author = $site_author;
        $selectedChapter->description = $data['site_content'];
        $selectedChapter->is_updated = "false"; //shows it hs been edited in pg-builder
        $selectedChapter->save();

        return redirect()->route('urlSetUp');
    }

    public function urlSetUp()
    {
        $userId = auth()->user()->id;
        $url_articles = '';
        if (Session::get('url_articles')) {
            $url_articles = Session::get('url_articles');
        }

        //avoid duplicate records
        // $dfyChapters = $dfyChapters->unique('article_title')->values()->all();

        $ecoverList = Ecover::all();

        $site_url = Session::get('site_url');

        $selectedChapters = [];
        $selectedChapters = SelectedChapter::where(['created_by'=>$userId, 'chapter_type'=>'url', 'keywords'=>'keywords url'])->get();

        $data = [
            'ecoverList' => $ecoverList,
            'url_articles' => $url_articles,
            'selectedChapters' => $selectedChapters
        ];
        return view('front.ebook.url.urlSetUp', $data);
    }

    //after clicking regenerate btn
    public function urlSetUpPost(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $data = $request->all();
        Session::put('whole_data', $data);

        $userId = auth()->user()->id;

        $rules = array(
            'title' => 'required',
            'ebook_author' => 'required',
        );
        $messages = [
            'title.required' => '* This field is required',
            'ebook_author.required' => '* This field is required',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);
        
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {
            $this->generalSetUp($data, 'url', $userId);
            return redirect()->route('library');
        }
    
        
    }

    //////UPLOAD EBOOK/////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function grabUpload(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $data = $request->all();

        $rules = array(
            'keywords' => 'required|string',
            'file' => 'required|file|mimes:pdf'
        );
        $messages = [
            'keywords.required' => '* This field is required',
            'keywords.string'   => 'Invalid Characters',

            'file.required' => '* This field is required',
            'file.file'   => 'This field must be of type file',
            'file.mimes' => '* File type must be of pdf format',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {
            if ($request->hasFile('file')) {

                $file = $request->file('file');

                $keywords = Session::put('keywords', $data['keywords']);
                $fileName = 'upload-ebook'.time() . '.' . $file->extension();

                //$file->store('public/pdf');
                $file->storePubliclyAs('public/pdf', $fileName); //storage/app/
                //Storage::put('public/pdf/'.$fileName, $fileName);

                $ebook = new Ebook;
                $ebook->unique_id = Str::random(10);
                $ebook->created_by = auth()->user()->id;

                $ebook->keywords = $data['keywords'];
                $ebook->title = $data['keywords'];
                $ebook->type = 'upload';
                $ebook->ebook_author = auth()->user()->name;
                $ebook->original_pdf_upload = $fileName;
                $ebook->save();
                $ebook_id = $ebook->id;
            }

            Session::put('keywords', $data['keywords']);
            Session::put('fileName', $fileName);

            return redirect()->route('uploadSetUp');
        }
    }

    public function uploadSetUp()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $user = auth()->user();
        //Session::flush();
        $keywords = '';
        if (!empty(Session::get('keywords'))) {
            $keywords = Session::get('keywords');
        }

        $adminEcovers = AdminEcover::where('status', 'true')->get();

        $data = [
            'keywords' => $keywords,
            'ecoverList' => $adminEcovers,
            'author' => $user->name,
        ];
        return view('front.ebook.upload.uploadSetUp', $data);
    }

    public function uploadSetUpPost(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $keywords = Session::get('keywords');
        $data = $request->all();
        $userId = auth()->user()->id;
        $rules = array(
            'title' => 'required',
            'ebook_author' => 'required',
        );
        $messages = [
            'title.required' => '* This field is required',
            'ebook_author.required' => '* This field is required',
        ];
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {

            $oMerger = PDFMerger::init();

            $ebook = Ebook::where(['type'=>'upload', 'created_by'=>$userId])->latest()->first();
            $ebook_id = $ebook->id;
            $newFileName = 'merged-pdf-'.time().'.pdf';
            $original_pdf_upload = $ebook->original_pdf_upload;
            $path_original_pdf_upload = Storage::path('public/pdf/'.$original_pdf_upload);

            $newDescriptionFileName = 'description-part-'.time().'.pdf';
            $newSummaryFileName = 'summary-part-'.time().'.pdf';

            $idata_append = [
                //'cover_image' => $data['cover_image'],
                'cover_image_local' => $data['cover_image'] ? substr($data['cover_image'], strrpos($data['cover_image'], '/') + 1) : '',
                'description' => $data['description'] ? $data['description'] : '', 
            ];
            $idata_prepend = [
                'summary' => $data['summary'] ? $data['summary'] : '',
            ];
            $fileName_description = ''; $fileName_summary = ''; $fileName_description_path = ''; $fileName_summary_path = '';
            $description_check = false; $summary_check = false;

            if (!empty($data['description']) || !empty($data['cover_image']) ) {
                $pdf = PDF::loadView('front.ebook.upload.uploadDescriptionPDF', $idata_append);
                Storage::put('uploaded/'.$newDescriptionFileName, $pdf->output());
                $description_check = true; 
            }
            if (!empty($data['summary'])) {
                $summary_check = 'summary';
                $pdf = PDF::loadView('front.ebook.upload.uploadSummaryPDF', $idata_prepend);
                Storage::put('uploaded/'.$newSummaryFileName, $pdf->output()); 
                $summary_check = true;
                   
            }

            $keywords = Session::get('keywords');
            $title = $data['title'];
            $ebook_author = $data['ebook_author'];
            $description = $data['description'];
            $summary = $data['summary'];

            $ebook->title = $data['title'];
            //$ebook->type = 'upload';

            $ebook->ebook_author = $data['ebook_author'];
            $ebook->cover_image = $data['cover_image'];

            $ebook->description = $data['description'] ? $data['description'] : null;
            $ebook->summary = $data['summary'] ? $data['summary'] : null;
            $ebook->merged_pdf_upload = $newFileName;
            $ebook->append_desc_pdf = $fileName_description ? $fileName_description : null;
            $ebook->prepend_summ_pdf = $fileName_summary ? $fileName_summary : null;
            
            $ebook->save();

            if($description_check && $summary_check){
                $path_description = Storage::path('uploaded/'.$newDescriptionFileName); 
                $path_summary = Storage::path('uploaded/'.$newSummaryFileName);

                $oMerger->addPDF($path_description, 'all');
                $oMerger->addPDF($path_original_pdf_upload, 'all');
                $oMerger->addPDF($path_summary, 'all');
                $oMerger->merge();
                Storage::put('upload/'.$newFileName, $oMerger->output());
            }

            if($description_check && !$summary_check){
                $path_description = Storage::path('uploaded/'.$newDescriptionFileName); 
                
                $oMerger->addPDF($path_description, 'all');
                $oMerger->addPDF($path_original_pdf_upload, 'all');
                $oMerger->merge();
                Storage::put('upload/'.$newFileName, $oMerger->output());
            }

            if($summary_check && !$description_check){
                $path_summary = Storage::path('uploaded/'.$newSummaryFileName);

                $oMerger->addPDF($path_original_pdf_upload, 'all');
                $oMerger->addPDF($path_summary, 'all');
                $oMerger->merge();
                Storage::put('upload/'.$newFileName, $oMerger->output());
            }

            Alert::success('Ebook PDF Merged Successfully', '');
            return redirect()->route('library');
        }
    }

    /////DFY EBOOK//////////////////////////////////////////////////////////////////////////////////////////

    public function dfySelected(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $data = $request->all();
        $userId = auth()->user()->id;

        if (!isset($data['dfyChecked'])) {
            Alert::success('Please select from list', '');
            return back();
        }

        foreach ($data['dfyChecked'] as $key => $val) {
            if (!empty($val)) {

                $selectedEbook = Ebook::find($data['ebook_id'][$key])->first();
                $ebook = new Ebook();
                $ebook->unique_id = Str::random(10);
                $ebook->created_by = $userId;

                $ebook->keywords = $selectedEbook->keywords;
                $ebook->title = $selectedEbook->title;
                $ebook->type = $selectedEbook->type;
                $ebook->ebook_author = $selectedEbook->ebook_author;
                $ebook->cover_image = $selectedEbook->cover_image;

                $ebook->body_font_family = $selectedEbook->body_font_family;
                $ebook->body_font_size = $selectedEbook->body_font_size;
                $ebook->dark_mode = $selectedEbook->dark_mode;
                $ebook->page_numbering = $selectedEbook->page_numbering;
                $ebook->numbering_format = $selectedEbook->numbering_format;

                $ebook->header_text = $selectedEbook->header_text;
                $ebook->header_text_link = $selectedEbook->header_text_link;
                $ebook->header_text_align = $selectedEbook->header_text_align;
                $ebook->header_text_color = $selectedEbook->header_text_color;
                $ebook->header_font_size = $selectedEbook->header_font_size;
                $ebook->header_font_family = $selectedEbook->header_font_family;

                $ebook->footer_text = $selectedEbook->footer_text;
                $ebook->footer_text_link = $selectedEbook->footer_text_link;
                $ebook->footer_text_align = $selectedEbook->footer_text_align;
                $ebook->footer_text_color = $selectedEbook->footer_text_color;
                $ebook->footer_font_size = $selectedEbook->footer_font_size;
                $ebook->footer_font_family = $selectedEbook->footer_font_family;

                $ebook->title_text_align = $selectedEbook->title_text_align;
                $ebook->title_text_color = $selectedEbook->title_text_color;
                $ebook->title_font_size = $selectedEbook->title_font_size;

                $ebook->subheader_text = $selectedEbook->subheader_text;
                $ebook->subheader_text_link = $selectedEbook->subheader_text_link;
                $ebook->subheader_text_align = $selectedEbook->subheader_text_align;
                $ebook->subheader_text_color = $selectedEbook->subheader_text_color;
                $ebook->subheader_font_size = $selectedEbook->subheader_font_size;
                $ebook->subheader_font_family = $selectedEbook->subheader_font_family;

                $ebook->description = $selectedEbook->description;
                $ebook->summary = $selectedEbook->summary;

                $ebook->original_pdf_upload = $selectedEbook->original_pdf_upload;
                $ebook->save();

                Alert::success('Ebooks Created Successfully', '');
                return redirect()->route('library');
            }
        }
    }

    public function deleteSelectedChapter (Request $request)
    {
       $data = $request->all();
       $selectedChapter = SelectedChapter::find($data['chapter_id']);
       $selectedChapter->delete();
       return response()->json(['message' => 'Removed Successfully', 'status'=>201]);
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
