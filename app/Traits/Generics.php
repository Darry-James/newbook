<?php

namespace App\Traits;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\ChapterAttribute;
use App\Models\Ebook;


trait Generics{

    public function test(){
        return '123';
    }

    public function random_string ( $type = 'alnum', $len = 60 ){
        switch ( $type )
        {
            case 'alnum'	:
            case 'numeric'	:
            case 'nozero'	:

                switch ($type)
                {
                    case 'alnum'	:	$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        break;
                    case 'numeric'	:	$pool = '0123456789';
                        break;
                    case 'nozero'	:	$pool = '123456789';
                        break;
                }

                $str = '';
                $mdstr = md5 ( uniqid ( mt_rand () ) );
                $mdstrstrlen = strlen($mdstr);
                for ( $i=0; $i < $len; $i++ )
                {
                    $str .= substr ( $pool, mt_rand ( 0, strlen ( $pool ) -1 ), 1 );
                }
                return $str.substr($mdstr, 0, $mdstrstrlen/2);
                break;
            case 'unique' : return md5 ( uniqid ( mt_rand () ) );
                break;
        }
    }

    //create a unique id
    public function createUniqueId($table_name, $column){

        /*$unique_id = Controller::picker();*/
        $unique_id = $this->random_string();
        $unique_id = substr($unique_id, 0, strlen($unique_id)/2);

        //check for the database count from the database"unique_id"
        $rowcount = DB::table($table_name)->where($column, $unique_id)->count();

        if($rowcount == 0){

            if(empty($unique_id)){
                $this->createUniqueId($table_name, $column);
            }else{
                return $unique_id;
            }

        }else{
            $this->createUniqueId($table_name, $column);
        }

    }

    function hashPassword($password){
        return hash('sha256', md5($password));
    }

    function validateImage($acceptedFileType = ['jpeg','jpg','png','gif','webp'], $fileName = []){
        $errorMessage = [];
        if(count($fileName) > 0){
            foreach($fileName as $k => $eachFileName){
                $explodedFile = explode('.', $eachFileName);
                $fileLen = count($explodedFile);
                $fileExtention = $explodedFile[$fileLen - 1];
                if(!in_array($fileExtention, $acceptedFileType)){
                    $errorMessage[] = 'Image at position '.($k + 1).' must be of image type: '.implode(',', $acceptedFileType.'='.$fileExtention);
                }
            }
        }

        if(count($errorMessage) > 0){
            return [
                'status'=>false,
                'error'=>$errorMessage,
                'data'=>[]
            ];
        }
        return [
            'status'=>true,
            'error'=>'',
            'data'=>[]
        ];

    }

    function randomStringCreator ( $type = 'alnum', $len = 8 ){
        switch ( $type )
        {
            case 'alnum'	:
            case 'numeric'	:
            case 'nozero'	:

                switch ($type)
                {
                    case 'alnum'	:	$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        break;
                    case 'numeric'	:	$pool = '0123456789';
                        break;
                    case 'nozero'	:	$pool = '123456789';
                        break;
                }

                $str = '';
                for ( $i=0; $i < $len; $i++ )
                {
                    $str .= substr ( $pool, mt_rand ( 0, strlen ( $pool ) -1 ), 1 );
                }
                return $str;
                break;
            case 'unique' : return md5 ( uniqid ( mt_rand () ) );
                break;
        }
    }

    public function createUniqueId2($table_name, $column, $type = 'numeric', $len = 8){

        $unique_id = $this->randomStringCreator ( $type, $len);

        //check for the database count from the database"unique_id"
        $rowcount = DB::table($table_name)->where($column, $unique_id)->count();

        if($rowcount == 0){

            if(empty($unique_id)){
                $this->createUniqueId2($table_name, $column);
            }else{
                return $unique_id;
            }

        }else{
            $this->createUniqueId2($table_name, $column);
        }

    }

    //function that changes an associative array to an object
    function returnObject(array $array){
        return json_decode(json_encode($array));
    }

    public function generalSetUp($data, $ebook_type, $userId) {

        $title = isset($data['title']) ? $data['title'] : '';
        $ebook_author = isset($data['ebook_author']) ? $data['ebook_author'] : '';
        $cover_image = isset($data['ebook_author']) ? $data['ebook_author'] : ''; //full url img link
        
        $keywords = !empty(Session::get('keywords')) ? Session::get('keywords') : $title;
    
        $body_font_family = isset($data['body_font_family']) ? $data['body_font_family'] : '';
        $body_font_size = isset($data['body_font_size']) ? $data['body_font_size'] : '';
        $dark_mode = isset($data['dark_mode']) ? 'true' : '';
        
        $page_numbering = isset($data['page_numbering']) ? $data['page_numbering'] : '';
        $numbering_format = isset($data['numbering_format']) ? $data['numbering_format'] : '';
    
        $header_text = isset($data['header_text']) ? $data['header_text'] : '';
        $header_text_link = isset($data['header_text_link']) ? $data['header_text_link'] : '';
        $header_text_align = isset($data['header_text_align']) ? $data['header_text_align'] : '';
        $header_text_color = isset($data['header_text_color']) ? $data['header_text_color'] : '';
        $header_font_size = isset($data['header_font_size']) ? $data['header_font_size'] : '';
        $header_font_family = isset($data['header_font_family']) ? $data['header_font_family'] : '';
    
        $footer_text = isset($data['footer_text']) ? $data['footer_text'] : '';
        $footer_text_link = isset($data['footer_text_link']) ? $data['footer_text_link'] : '';
        $footer_text_align = isset($data['footer_text_align']) ? $data['footer_text_align'] : '';
        $footer_text_color = isset($data['footer_text_color']) ? $data['footer_text_color'] : '';
        $footer_font_size = isset($data['footer_font_size']) ? $data['footer_font_size'] : '';
        $footer_font_family = isset($data['footer_font_family']) ? $data['footer_font_family'] : '';
    
        $title_text_align = isset($data['title_text_align']) ? $data['title_text_align'] : '';
        $title_text_color = isset($data['title_text_color']) ? $data['title_text_color'] : '';
        $title_font_size = isset($data['title_font_size']) ? $data['title_font_size'] : '';
    
        $subheader_text = isset($data['subheader_text']) ? $data['subheader_text'] : '';
        $subheader_text_link = isset($data['subheader_text_link']) ? $data['subheader_text_link'] : '';
        $subheader_text_align = isset($data['subheader_text_align']) ? $data['subheader_text_align'] : '';
        $subheader_text_color = isset($data['subheader_text_color']) ? $data['subheader_text_color'] : '';
        $subheader_font_size = isset($data['subheader_font_size']) ? $data['subheader_font_size'] : '';
        $subheader_font_family = isset($data['subheader_font_family']) ? $data['subheader_font_family'] : '';
        
        $description = isset($data['description']) ? $data['description'] : '';
        $summary = isset($data['summary']) ? $data['summary'] : '';
    
        $newFileName = $ebook_type.'-ebook-'.time().'.pdf';
    
        $ebook = new Ebook();
        // $ebook->unique_id = $this->createUniqueId('ebooks ', 'unique_id');
        $ebook->unique_id = Str::random(10);
        $ebook->created_by = $userId;
    
        $ebook->keywords = !empty(Session::get('keywords')) ? Session::get('keywords') : $title;
        $ebook->title = $title != '' ? $data['title'] : null;
        $ebook->type = 'article';
        $ebook->ebook_author = $ebook_author != '' ? $data['ebook_author'] : null;
        $ebook->cover_image = $cover_image != '' ? $data['cover_image'] : null;
    
        $ebook->body_font_family = $body_font_family != '' ? $data['body_font_family'] : null;
        $ebook->body_font_size = $body_font_size != '' ? $data['body_font_size'] : null;
        $ebook->dark_mode = isset($data['dark_mode']) ? 'true' : 'false';
        $ebook->page_numbering = $page_numbering != '' ? $data['page_numbering'] : null; //in_header or in_footer
        $ebook->numbering_format = $numbering_format != '' ? $data['numbering_format'] : null; //[page], -[page]-, Page [page], Page [page] of [topage]
    
        $ebook->header_text = $header_text != '' ? $data['header_text'] : null;
        $ebook->header_text_link = $header_text_link != '' ? $data['header_text_link'] : null;
        $ebook->header_text_align = $header_text_align != '' ? $data['header_text_align'] : null;
        $ebook->header_text_color = $header_text_color != '' ? $data['header_text_color'] : null;
        $ebook->header_font_size = $header_font_size != '' ? $data['header_font_size'] : null;
        $ebook->header_font_family = $header_font_family != '' ? $data['header_font_family'] : null;
    
        $ebook->footer_text = $footer_text != '' ? $data['footer_text'] : null;
        $ebook->footer_text_link = $footer_text_link != '' ? $data['footer_text_link'] : null;
        $ebook->footer_text_align = $footer_text_align != '' ? $data['footer_text_align'] : null;
        $ebook->footer_text_color = $footer_text_color != '' ? $data['footer_text_color'] : null;
        $ebook->footer_font_size = $footer_font_size != '' ? $data['footer_font_size'] : null;
        $ebook->footer_font_family = $footer_font_family != '' ? $data['footer_font_family'] : null;
    
        $ebook->title_text_align = $title_text_align != '' ? $data['title_text_align'] : null;
        $ebook->title_text_color = $title_text_color != '' ? $data['title_text_color'] : null;
        $ebook->title_font_size = $title_font_size != '' ? $data['title_font_size'] : null;
    
        $ebook->subheader_text = $subheader_text != '' ? $data['subheader_text'] : null;
        $ebook->subheader_text_link = $subheader_text_link != '' ? $data['subheader_text_link'] : null;
        $ebook->subheader_text_align = $subheader_text_align != '' ? $data['subheader_text_align'] : null;
        $ebook->subheader_text_color = $subheader_text_color != '' ? $data['subheader_text_color'] : null;
        $ebook->subheader_font_size = $subheader_font_size != '' ? $data['subheader_font_size'] : null;
        $ebook->subheader_font_family = $subheader_font_family != '' ? $data['subheader_font_family'] : null;
    
        $ebook->description = $description != '' ? $data['description'] : null;
        $ebook->summary = $summary != '' ? $data['summary'] : null;
    
        $ebook->original_pdf_upload = $newFileName;
        $ebook->save();
    
        foreach ($data['chapter_title'] as $key => $val) {
            if (!empty($val)) {
    
                //used in pdf
                $articleData[] = [
                    'title' => $val,
                    'description' => $data['chapter_description'][$key],
                ];
    
                $chapterAttribute = new ChapterAttribute();
                //$ebookArticleAttribute->unique_id = $this->createUniqueId('ebook_article_attributes ', 'unique_id');
                $chapterAttribute->unique_id = Str::random(10);
                $chapterAttribute->created_by = $userId;
                $chapterAttribute->chapter_keywords = $data['title'];
                $chapterAttribute->chapter_type = $ebook_type;
                $chapterAttribute->chapter_title = $val;
                $chapterAttribute->chapter_description = $data['chapter_description'][$key];
                $chapterAttribute->ebook_id = $ebook->id;
                $chapterAttribute->save();
            }
        }
    
        //pdf section
        //used in pdf
        $idata = [
            'title' => $title,
            'ebook_author' => $ebook_author,
            'cover_image' => $cover_image,
            'cover_image_local' => $cover_image != '' ? substr($data['cover_image'], strrpos($data['cover_image'], '/') + 1) : '',
            'body_font_family' => $body_font_family,
            'body_font_size' => $body_font_size,
            'dark_mode' => $dark_mode,
    
            'page_numbering' => $page_numbering, //in_header or in_footer
            'numbering_format' => $numbering_format, //[page], -[page]-, Page [page], Page [page] of [topage]
    
            'header_text' => $header_text,
            'header_text_link' => $header_text_link,
            'header_text_align' => $header_text_align,
            'header_text_color' => $header_text_color,
            'header_font_size' => $header_font_size,
            'header_font_family' => $header_font_family,
    
            'footer_text' => $footer_text,
            'footer_text_link' => $footer_text_link,
            'footer_text_align' => $footer_text_align,
            'footer_text_color' => $footer_text_color,
            'footer_font_size' => $footer_font_size,
            'footer_font_family' => $footer_font_family,
    
            'title_text_align' => $title_text_align,
            'title_text_color' => $title_text_color,
            'title_font_size' => $title_font_size,
    
            'subheader_text' => $subheader_text,
            'subheader_text_link' => $subheader_text_link,
            'subheader_text_align' => $subheader_text_align,
            'subheader_text_color' => $subheader_text_color,
            'subheader_font_size' => $subheader_font_size,
            'subheader_font_family' => $subheader_font_family,
    
            'description' => $description,
            'summary' => $summary,
    
            'articleData' => $articleData,
        ];
    
        if ($dark_mode == '') {
            //to make pdf
            $pdf = PDF::loadView('front.ebook.'.$ebook_type.'.'.$ebook_type.'PDF', $idata);
            Storage::put('public/pdf/'.$newFileName, $pdf->output());
            Alert::success('Ebook PDF Generated Successfully', '');
            //$pdf->stream($newFileName, array("Attachment" => false));
            return true;
            return redirect()->route('library');
        } else {
            $pdf = PDF::loadView('front.ebook.'.$ebook_type.'.'.$ebook_type.'DarkModePDF', $idata);
            Storage::put('public/pdf/'.$newFileName, $pdf->output());
            Alert::success('Ebook PDF Generated Successfully', '');
            //$pdf->stream($newFileName, array("Attachment" => false));
            return true;
            return redirect()->route('library');
        }
        
        Alert::success('Ebook PDF Generated Successfully', '');
        return redirect()->route('library');
    }

}