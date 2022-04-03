<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Generics;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use PDF;
use Auth;
use App\Models\AdminEcover;
use App\Models\Ecover;
use App\Models\Dimension;

class EcoverController extends Controller
{
    function __construct(Dimension $dimension, Ecover $ecover)
    {
        $this->dimension = $dimension;
        $this->ecover = $ecover;
    }

    public function ecoverCreator()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }

        $loggedInUser = Auth::user();
        $ecovers = Ecover::where('created_by', $loggedInUser->id)->orderBy('id','DESC')->get();

        $adminEcovers = AdminEcover::where('status', 'true')->get();
        
        return view('front.ecover.ecoverCreator', compact('ecovers', 'adminEcovers'));
        //return view('front.pages.ecover.ecoverCreator', $data);
    }

    //without cloudinary
    public function ecoverCreatorSaveToLocal(Request $request)
    {
        $data = $request->all();
        
        $rules = array(
            'title' => 'required|string',
            'file_link' => 'required|string',
        );
        $messages = [
            'title.required' => '* This field is required',
            'title.string'   => 'Invalid Characters',
        ];
        //validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {
            //geting the dimension details to insert the id into the Ecover model
            $type_id = $this->dimension->getSingleDimension([
                ['type', $data['type_value']],
            ]);

            $creator = Auth::user();

            if ($type_id != null) {
                $ecover = new Ecover();
                $ecover->unique_id = Str::random(15);
                $ecover->title = $data['title'];
                $ecover->dimension_id = $type_id->id;
                $ecover->type = $data['type_value'];
                $ecover->created_by = $creator->id;
                $ecover->thumbnail = $data['file_link'];
                $ecover->save();

                Alert::success('Ecover Created Successfully', '');
                return back();
            }
        }
    }

    //downloadfile
    public function downloadfile($id, $ext)
    {
        $ecover = Ecover::where('id', $id)->first();
        $slug = $ecover->slug;
        $userid = auth()->user()->id;
        $filelink = $ecover->thumbnail; //http://127.0.0.1:9000/pathToFile/img1.jpg
        $type = $ext;

        //grab string after last character
        $fileName = basename($filelink); //img1.jpg
        
        $filePath = public_path("backend/assets/images/big/" . $fileName);
        $headers = ['Content-Type: application/json'];
        $fileName = $slug .'-' . time() . '.' . $type;

        return response()->download($filePath, $fileName, $headers);
    }

    public function deleteEcover($id)
    {
        $ecover = Ecover::find($id);

        $ecover->delete();

        Alert::success('Ecover Deleted Successfully', '');
        return back();

        return redirect()->back()
            ->with('success', 'File deleted successfully');
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
