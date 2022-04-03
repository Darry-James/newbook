<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;

use App\Models\User;
use App\Models\Ecover;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //landing
    public function landing()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
        // $oMerger = PDFMerger::init();
        // $file1 = Storage::path('uploaded/upload-ebook1648683576.pdf');
        // $file2 = Storage::path('uploaded/upload-ebook1648683576.pdf');
        // $oMerger->addPDF($file1, 'all');
        // $oMerger->addPDF($file2, 'all');
        // $oMerger->merge();
        // return $oMerger->output();
        // return;
        

        // $pdf = PDF::loadView('front.ebook.article.articlePDF', $data);
        // return $pdf->download('article.pdf');

        // $pdf = PDF::loadView('front.ebook.article.testPDF', $data);
        // Storage::put('public/pdf/invoice.pdf', $pdf->output());
        // return $pdf->stream('document.pdf');

        $user = Auth::user();

        $ebooks = $user->ebooks ? $user->ebooks : [];
        $products = $user->products ? $user->products : [];
        
        $funnels = $user->funnels ? $user->funnels : [];

        $flat_builders = Ecover::where(['created_by'=>$user->id, 'type'=>'flat_cover'])->get();
        $images = Ecover::where('created_by', $user->id)->where('thumbnail', '!=', '')->get();
        
        return view('landing', compact('user', 'ebooks', 'products', 'funnels', 'flat_builders', 'images'));
    }

    //login
    public function register()
    {
        return view('register');
    }

    public function registerPost(RegisterRequest $request)
    {
        $data = $request->all();
        $name = $data['name'];
        $email = $data['email'];
        $phone_number = $data['phone_number'] ? $data['phone_number'] : null;
        $password = Hash::make($data['password']);

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'unique_id' => Str::random(20),
            'phone_number' => $phone_number,
            'password' => $password,
        ]);

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }

    //login
    public function login()
    {
        return view('login');
    }

    public function loginPost(LoginRequest $request)
    {
        $data = $request->all();
        $userCheck = User::where('email', $data['email']);

        if ($userCheck->count() < 1) {
            Alert::error('User does not Exist', '');
            return back();
        }

        $user = $userCheck->first();

        $passCheck = Hash::check($data['password'], $user->password); //bool true or false

        if (($userCheck->count() > 0) && ($passCheck)) {
            Auth::login($user);
            return redirect('/')->with('success', "Login successfully.");
            //return redirect()->intended('/admin')->withSuccess('Signed in');
        } else {
            Alert::error('Invalid Credentials', '');
            return back();
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

    //conversionTools
    public function conversionTools()
    {
        return view('front.others.conversionTools');
    }

    //unlimitedVersion
    public function unlimitedVersion()
    {
        return view('front.others.unlimitedVersion');
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
