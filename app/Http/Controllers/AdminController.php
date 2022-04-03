<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;

use App\Models\AdminEcover;
use App\Models\AdminEbook;
use App\Models\AdminChapterAttribute;
use App\Models\User;
use App\Models\Product;
use App\Models\Funnel;
use App\Models\Ebook;
use App\Models\Ecover;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    //adminEcovers
    public function adminEcovers()
    {
        $adminEcovers = AdminEcover::where('status', 'true')->orderBy('id', 'DESC')->get(); 
        return view('admin.pages.ecover.ecovers', compact('adminEcovers'));
    }

    //adminAddEcovers
    public function addAdminEcovers($title, $type)
    {
        $ecover = new AdminEcover();
        $title_array = explode('.', $title);

        $title_only = $title_array[0];
        $extension = $title_array[1];

        $ecover->unique_id = Str::random(10);
        $ecover->title = $title_only;
        $ecover->slug = Str::slug($title_only);
        $ecover->thumbnail = $title;
        $ecover->type = $type;
        $ecover->created_by = auth()->user()->id;
        $ecover->save();
        Alert::success('Ecover Added Successfully', '');
        return back();
       
    }

    //adminEcoversList
    public function adminEcoversList()
    {
        $ecoverList = Ecover::all();
        return view('admin.pages.ecoverList', compact('ecoverList'));
       
    }

    public function adminEditEcoverList($ecover_id)
    {
        $ecover = Ecover::find($ecover_id);
        $users = User::all();
        return view('admin.pages.editEcover', compact('ecover', 'users'));
       
    } 

    public function adminEditEcoverListPost(Request $request, $ecover_id)
    {
        //http://127.0.0.1:9100/backend/assets/images/big/img1.jpg
        //return URL::to(''); http://127.0.0.1:9100
        $data = $request->all();
        $ecover = Ecover::find($ecover_id);
        $base_url = URL::to('');

        $file = $request->file('thumbnail') ? $request->file('thumbnail') : '';

        $urlPathImg = '';
        if ($file != '') {
            //$nameWithExtension = $file->getClientOriginalName(); //img1.jpg
            //$nameWithoutExtension = strtok($nameWithExtension, '.'); //img1
        
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(111, 99999) . '.' . $extension;
            $image_path = 'backend/assets/images/big' . '/' . $fileName;
            $urlPathImg = $base_url . '/' . $image_path;
            \Image::make($file)->save($image_path);
        }

        $ecover->title = $data['title'];
        $ecover->created_by = $data['created_by'];
        $ecover->status = isset($data['status']) ? 'true' : 'false';
         if ($urlPathImg != '') {
            $ecover->thumbnail = $urlPathImg;
         }
        $ecover->save();
        Alert::success('Ecover Updated Successfully', '');
        return back();
       
    }

    //adminEbooks
    public function adminEbooks()
    {
        $adminEbooks = Ebook::all();
        return view('admin.pages.ebooks', compact('adminEbooks'));
    }

    public function adminEditEbook($ebook_id)
    {
        $ebook = Ebook::find($ebook_id);
        $users = User::all();
        return view('admin.pages.editEbook', compact('ebook', 'users'));
       
    } 

    public function adminEditEbookPost(Request $request, $ebook_id)
    {
        $data = $request->all();
        $ebook = Ebook::find($ebook_id);
        $base_url = URL::to('');

        $file = $request->file('cover_image') ? $request->file('cover_image') : '';

        $urlPathImg = '';
        if ($file != '') {
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(111, 99999) . '.' . $extension;
            $image_path = 'backend/assets/images/big' . '/' . $fileName;
            $urlPathImg = $base_url . '/' . $image_path;
            \Image::make($file)->save($image_path);
        }

        $ebook->title = $data['title'];
        $ebook->status = isset($data['status']) ? 'true' : 'false';
         if ($urlPathImg != '') {
            $ebook->cover_image = $urlPathImg;
         }
        $ebook->save();
        Alert::success('Ebook Updated Successfully', '');
        return back();
    }

    //adminUsers
    public function adminUsers()
    {
        $adminUsers = User::all();
        return view('admin.pages.users', compact('adminUsers'));
    }

    public function adminEditUser($user_id)
    {
        $user = User::find($user_id);
        return view('admin.pages.editUser', compact('user'));
    }

    public function adminEditUserPost(Request $request, $user_id)
    {
        $data = $request->all();
        $user = User::find($user_id);
        $base_url = URL::to('');

        $file = $request->file('profile_picture') ? $request->file('profile_picture') : '';

        $fileName = '';
        if ($file != '') {
            $extension = $file->getClientOriginalExtension();
            $fileName = rand(111, 99999) . '.' . $extension;
            $image_path = 'profile_picture' . '/' . $fileName;
            \Image::make($file)->save($image_path);
        }

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->phone_number = $data['phone_number'];
        $user->role = $data['role'];
        $user->status = isset($data['status']) ? 'true' : 'false';

         if ($fileName != '') {
            $user->profile_picture = $fileName;
         }
        $user->save();
        Alert::success('User Updated Successfully', '');
        return back();
    }

    //adminProducts
    public function adminProducts()
    {
        $adminProducts = Product::all();
        return view('admin.pages.products', compact('adminProducts'));
    }

    public function adminEditProduct($product_id)
    {
        $product = Product::find($product_id);
        
        $users = User::all();
        $ebooks = $product->createdBy->ebooks;
        $funnels = $product->createdBy->funnels;
        return view('admin.pages.editProduct', compact('product', 'users', 'ebooks', 'funnels'));
    }

    public function adminEditProductPost(Request $request, $product_id)
    {
        $data = $request->all();
        $product = Product::find($product_id);
        $product->ebook_id   = $data['ebook_id'];
        $product->price      = $data['price'] > 0 ? $data['price'] : null;
        $product->funnel_id  = $data['funnel_id'];
        $product->status     = isset($data['status']) ? 'true' : 'false';
        $product->save();
        Alert::success('Product Updated Successfully', '');
        return back();
    }

    //adminFunnels
    public function adminFunnels()
    {
        $adminFunnels = Funnel::all();
        return view('admin.pages.funnels', compact('adminFunnels'));
    }

    public function adminEditFunnel($funnel_id)
    {
        $funnel = Funnel::find($funnel_id);
        return view('admin.pages.editFunnel', compact('funnel'));
    }

    public function adminEditFunnelPost(Request $request, $funnel_id)
    {
        $data = $request->all();
        $funnel = Funnel::find($funnel_id);
        $funnel->title   = $data['title'];
        $funnel->status  = isset($data['status']) ? 'true' : 'false';
        $funnel->save();
        Alert::success('Funnel Updated Successfully', '');
        return back();
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
