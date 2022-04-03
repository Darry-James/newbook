<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\Ebook;

class LibraryController extends Controller
{
    public function index($ebook_id="", $action_type="")
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }

        $ebooks = [];
        $user = auth()->user();

        if($ebook_id != "" && $action_type == "download_pdf"){
            $ebook = Ebook::where('unique_id',$ebook_id)->first();
            $type = $ebook->type;
            $slug = $ebook->slug;
            $merged = $ebook->merged_pdf_upload; //by virtue of update
            $newFileName = $slug.'-ebook-'.time().'.pdf';

            if (($type == 'article') || ($type == 'manual') || ($type == 'url')) {
                $file_path = !isset($merged) ? Storage::path('public/pdf/'.$ebook->original_pdf_upload) : Storage::path($merged);
                $headers = ['Content-Type: application/pdf'];
                return response()->download($file_path, $newFileName, $headers);
            }

            if ($type == 'upload') {
                $file_path = !isset($merged) ? Storage::path('public/pdf/'.$ebook->original_pdf_upload):
                    Storage::path('upload/'.$merged);
                $headers = ['Content-Type: application/pdf'];
                return response()->download($file_path, $newFileName, $headers);
            }
            
            $file_path = Storage::path($ebook->original_pdf_upload);
            $headers = ['Content-Type: application/pdf'];
            return response()->download($file_path, $newFileName, $headers);
        }

        if($ebook_id != "" && $action_type == "preview"){
            $ebook = Ebook::where('unique_id',$ebook_id)->first();
            $type = $ebook->type;
            $merged = $ebook->merged_pdf_upload;
            $newFileName = $type.'-ebook-'.time().'.pdf';

            if ($type == 'upload') {
                $file_path = !isset($merged) ? Storage::path($ebook->original_pdf_upload) : Storage::path($merged);
                $headers = ['Content-Type: application/pdf'];
                return response()->file($file_path, $headers);
            }

            $file_path = Storage::path($ebook->original_pdf_upload);
            $headers = ['Content-Type: application/pdf'];
            return response()->file($file_path, $headers);
        }

        
        //shld be ebooks not belonging to auth user
        $check = Ebook::orderBy('id', 'DESC')->get();
        if ($check->count() > 0) {
            $ebooks_col = collect($check);

            //avoid duplicate records
            //$ebooks = $ebooks->unique('title')->values()->all();
            $ebooks = $user->ebooks()->orderBy('id', 'DESC')->get();
        }
        return view('front.library.index', compact('ebooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
