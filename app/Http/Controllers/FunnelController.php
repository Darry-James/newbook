<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use App\Models\Ebook;
use App\Models\Funnel;
use App\Models\Product;

class FunnelController extends Controller
{
    //funnel
    public function funnel()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $userId = auth()->user()->id;
        $funnels = Funnel::where('created_by', $userId)->orderBy('id', 'desc')->get();
        return view('front.funnel.funnel', compact('funnels', 'userId'));
    }

    //dfyfunnel
    public function dfyFunnel()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $dfyFunnels = Funnel::all();
        $owner = auth()->user();
        return view('front.funnel.dfyFunnel', compact('dfyFunnels', 'owner'));
    }

    //add
    public function addFunnelPost(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $userId = auth()->user()->id;
        $data = $request->all();
        $rules = array(
            'title' => 'required',
        );
        
        $messages = [
            'title.required' => '* This field is required',
        ];
        
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
            
        } else {
            $funnel = new Funnel();
            $funnel->unique_id = Str::random(10);
            $funnel->created_by = $userId;
            $funnel->title = $data['title'];
            $funnel->save();

            Alert::success('Funnel Created Successfuly', '');
           return back();
        }
    }

    //editFunnel
    public function editFunnel($id)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $funnel = Funnel::where('unique_id', $id)->first();
        Session::put('funnel_id', $funnel->id);
        return view('front.funnel.editFunnel', compact('funnel'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addDfyFunnelToMyFunnel($dfyFunnel_id)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }

        $userId = auth()->user()->id;
        $funnel = Funnel::where('unique_id', $dfyFunnel_id)->first();
        $funnelProducts = $funnel->products;

        $newFunnel = new Funnel();
        $newFunnel->unique_id = Str::random(15);
        $newFunnel->created_by = $userId;
        $newFunnel->title = $funnel->title;
        $newFunnel->save();

        //with this we acquire the ebooks belonging to this funnel
        if ($funnelProducts->count() > 0) {
            foreach ($funnelProducts as $product) {
                $newProduct = new Product();

                $newProduct->unique_id = Str::random(15);
                $newProduct->created_by = $userId;
                $newProduct->ebook_id = $product->ebook_id;
                $newProduct->price = $product->price;
    
                $newProduct->is_sales_page_enabled = $product->is_sales_page_enabled;
                $newProduct->sales_page_content = $product->sales_page_content;
                $newProduct->squeeze_thankyou_page = $product->squeeze_thankyou_page;
                $newProduct->download_content_page = $product->download_content_page;
    
                $newProduct->is_exit_popup_page_enabled = $product->is_exit_popup_page_enabled;
                $newProduct->exit_popup_sales_page_content = $product->exit_popup_sales_page_content;
                $newProduct->exit_popup_download_page = $product->exit_popup_download_page;
                $newProduct->funnel_id = $newFunnel->id;
        
                $newProduct->save();
        
            }
        }

        Alert::success('Added to my Funnel Successfuly', '');
        return redirect()->route('funnel');
    }
}
