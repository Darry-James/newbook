<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectedChapter;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class PageBuilderController extends Controller
{
    //used, pgManager
    public function pgManager($chapter_type="", $chapter_id="")
    {
        //edit btn
        if($chapter_id != ""){
            $chapter_id = $chapter_id;
            $chapter_type = $chapter_type;
            $selectedChapter = SelectedChapter::where('id', $chapter_id)->first();
            $title = isset($selectedChapter->title) ? $selectedChapter->title : '';
            $author = isset($selectedChapter->author) ? $selectedChapter->author : '';
            $description = isset($selectedChapter->description) ? $selectedChapter->description : '';
            return view('pgManager', compact('selectedChapter', 'title', 'author', 'description','chapter_type', 'chapter_id'));
        }
        
        //add new chapter btn
        $selectedChapter = '';
        $chapter_id = '';
        $chapter_type = $chapter_type;
        $title = '';
        $author = '';
        $description = '';
        return view('pgManager', compact('selectedChapter', 'title', 'author', 'description','chapter_type', 'chapter_id'));
    }

    //PgManagerPost, ajax request
    public function pgManagerPost(Request $request)
    {
        $userId = auth()->user()->id;
        $data = $request->all();
        
        $keywords = Session::get('keywords');
        
        $chapter_id = $data['chapterId'];
        $chapter_type = $data['chapterType'];

        $title = $data['title'];
        $author = $data['author'];
        $description = $data['description'];
        

        // try {
            
            if ($chapter_id==null) {
                $selectedChapter = new SelectedChapter();
                $selectedChapter->created_by = $userId;
                $selectedChapter->chapter_type = $chapter_type;
                $selectedChapter->keywords = $chapter_type == 'url' ? 'keywords url' : $keywords;
                $selectedChapter->title = $title == null ? null : $title;
                $selectedChapter->author = $author == null ? null : $author;
                $selectedChapter->description = $description == null ? null : $description;
                $selectedChapter->is_updated = "true"; //shows it hs been edited in pg-builder
                $selectedChapter->save();
                
                return response()->json(['message' => 'saved', 'status'=>201]);
            }else{
                
                // if ($chapter_id=="") {
                //     return response()->json(['message' => 'Not Saved','status'=>400]);
                // }
                $chapter_id = $chapter_id;
                $selectedChapter = SelectedChapter::where('id', $chapter_id)->first();
                $selectedChapter->created_by = $userId;
                $selectedChapter->chapter_type = $chapter_type;
                $selectedChapter->keywords = $chapter_type == 'url' ? 'keywords url' : $keywords;
                $selectedChapter->title = $title == null ? null : $title;
                $selectedChapter->author = $author == null ? null : $author;
                $selectedChapter->description = $description == null ? null : $description;
                $selectedChapter->is_updated = "true"; //shows it hs been edited in pg-builder
                $selectedChapter->save();
                return response()->json(['message' => 'saved', 'status'=>201]);
            }

        // } catch (\Throwable $th) {
        //     //throw $th;
        //     return respunse(500, ['message' => 'Internal server error', 'error' => $th->getMessage()]);
        // }
        

        
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
