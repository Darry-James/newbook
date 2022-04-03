<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use App\Models\Ebook;
use App\Models\Product;
use App\Models\Funnel;
use App\Models\ProductFunnel;
use App\Models\ProductNoSaleSampleTemplate;
use App\Models\ProductSaleSampleTemplate;

class ProductController extends Controller
{
    //products
    public function product()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $userId = auth()->user()->id;
        $products = Product::where('created_by', $userId)->orderBy('id', 'desc')->get();
        return view('front.product.product', compact('products'));
    }

    //addProduct
    public function addProduct()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $userId = auth()->user()->id;
        $ebooks = Ebook::where('created_by', $userId)->get();
        
        return view('front.product.addProduct', compact('ebooks'));
    }

    //store product
    public function addProductPost(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $userId = auth()->user()->id;
        $data = $request->all();
        $rules = array(
            'ebook_id' => 'required',
            'price' => 'nullable|numeric',
        );
        
        $messages = [
            'ebook_id.required' => '* This field is required',
            'price.numeric' => '* This field must be a number',
        ];
        
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
            
        } else {
            $product = new Product();
            //check for active sale/exit checkbox
            $product->unique_id = Str::random(10);
            $product->created_by = $userId;
            $product->ebook_id = $data['ebook_id'];
            $product->price = $data['price'];

            $product->is_sales_page_enabled = isset($data['is_sales_page_enabled']) ? "true" : "false";

            if(isset($data['is_sales_page_enabled'])){
                $product->sales_page_content = isset($data['sales_page_content']) ? $data['sales_page_content'] : null;
            }else{
                $product->sales_page_content = null; 
            }
            
            $product->squeeze_thankyou_page = isset($data['squeeze_thankyou_page']) ? $data['squeeze_thankyou_page'] : null;
            $product->download_content_page = isset($data['download_content_page']) ? $data['download_content_page'] : null;

            $product->is_exit_popup_page_enabled = isset($data['is_exit_popup_page_enabled']) ? "true" : "false";

            if(isset($data['is_exit_popup_page_enabled'])){
                $product->exit_popup_sales_page_content = isset($data['exit_popup_sales_page_content']) ? $data['exit_popup_sales_page_content'] : null;
                $product->exit_popup_download_page = isset($data['exit_popup_download_page']) ? $data['exit_popup_download_page'] : null;
            }else{
                $product->exit_popup_sales_page_content = null;
                $product->exit_popup_download_page = null;
            }
            
            $product->save();

            Alert::success('Product Created Successfully', '');
            return back();
                
        }
    }

    //editProduct
    public function editProduct($id="")
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $userId = auth()->user()->id;
        $ebooks = Ebook::where('created_by', $userId)->get();
        $product = Product::where('unique_id', $id)->first();
        return view('front.product.editProduct', compact('product', 'ebooks'));
    }

    //editProductPost
    public function editProductPost(Request $request, $id)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $userId = auth()->user()->id;
        $data = $request->all();
        $rules = array(
            'ebook_id' => 'required',
            'price' => 'nullable|numeric',
        );
        
        $messages = [
            'ebook_id.required' => '* This field is required',
            'price.numeric' => '* This field must be a number',
        ];
        
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
            
        } else {
            $product = Product::where('unique_id',$id)->first();
           
            //$product->unique_id = Str::random(10);
            $product->created_by = $userId;
            $product->ebook_id = $data['ebook_id'];
            $product->price = $data['price'];

            $product->is_sales_page_enabled = isset($data['is_sales_page_enabled']) ? "true" : "false";

            if(isset($data['is_sales_page_enabled'])){
                $product->sales_page_content = isset($data['sales_page_content']) ? $data['sales_page_content'] : null;
            }else{
                $product->sales_page_content = null; 
            }
            
            $product->squeeze_thankyou_page = isset($data['squeeze_thankyou_page']) ? $data['squeeze_thankyou_page'] : null;
            $product->download_content_page = isset($data['download_content_page']) ? $data['download_content_page'] : null;

            $product->is_exit_popup_page_enabled = isset($data['is_exit_popup_page_enabled']) ? "true" : "false";

            if(isset($data['is_exit_popup_page_enabled'])){
                $product->exit_popup_sales_page_content = isset($data['exit_popup_sales_page_content']) ? $data['exit_popup_sales_page_content'] : null;
                $product->exit_popup_download_page = isset($data['exit_popup_download_page']) ? $data['exit_popup_download_page'] : null;
            }else{
                $product->exit_popup_sales_page_content = null;
                $product->exit_popup_download_page = null;
            }
            
            $product->save();

            Alert::success('Product Updated Successfully', '');
            return back();
        }
    }

    //addProductToFunnel
    public function addProductToFunnel($product_id="")
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $userId = auth()->user()->id;
        $product = Product::where('unique_id',$product_id)->first();
        $funnels = Funnel::where('created_by', $userId)->get();

        if ($funnels->count() < 1) {
            Alert::error('Your funnel is empty', 'Add funnel to continue');
            return back();
        }

        $funnel = null;
        if (!empty(Session::get('funnel_id'))) {
            $funnel_id = Session::get('funnel_id'); 
            $funnel = Funnel::where('id', $funnel_id)->first();
        }

        return view('front.product.addProductToFunnel', compact('funnels', 'product', 'funnel'));
        
    }

    //editProductPost
    public function addProductToFunnelPost(Request $request, $id)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $userId = auth()->user()->id;
        $data = $request->all();
        $rules = array(
            'funnel_id' => 'required',
            //'price' => 'nullable|numeric',
        );
        
        $messages = [
            'funnel_id.required' => '* This field is required',
            //'price.numeric' => '* This field must be a number',
        ];
        
        // validate against inputs frm d form
        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
            
        } else {
            $product = Product::where('unique_id',$id)->first();

            //$product->unique_id = Str::random(10);
            $product->created_by = $userId;
            $product->funnel_id = $data['funnel_id'];
            //$product->price = $data['price'];

            $product->is_sales_page_enabled = isset($data['is_sales_page_enabled']) ? "true" : "false";

            if(isset($data['is_sales_page_enabled'])){
                $product->sales_page_content = isset($data['sales_page_content']) ? $data['sales_page_content'] : null;
            }else{
                $product->sales_page_content = null; 
            }
            
            $product->squeeze_thankyou_page = isset($data['squeeze_thankyou_page']) ? $data['squeeze_thankyou_page'] : null;
            $product->download_content_page = isset($data['download_content_page']) ? $data['download_content_page'] : null;

            // $product->is_exit_popup_page_enabled = isset($data['is_exit_popup_page_enabled']) ? "true" : "false";

            // if($request->is_exit_popup_page_enabled){
            //     $product->exit_popup_sales_page_content = isset($data['exit_popup_sales_page_content']) ? $data['exit_popup_sales_page_content'] : null;
            //     $product->exit_popup_download_page = isset($data['exit_popup_download_page']) ? $data['exit_popup_download_page'] : null;
            // }

            Session::forget('funnel_id');
            
            $product->save();

            Alert::success('Product Added to Funnel & Updated Successfully', '');
            return back();
        }
    }

    //ajax
    public function loadTemplates(){
        $templates = ProductNoSaleSampleTemplate::all();
        $arr = [];
        foreach ($templates as $temp) {
            // $contents = trim(htmlentities($temp->content));
            $id = $temp->id;
            $thumbnail = $temp->thumbnail;
            $title = $temp->title;
            $arr[] = array('id' => $id, 'thumbnail' => $thumbnail, 'title' => $title);
        }
        return response()->json($arr);
    }

    //ajax
    public function saleTemplates(){
        $templates = ProductSaleSampleTemplate::all();
        $arr = [];
        foreach ($templates as $temp) {
            // $contents = trim(htmlentities($temp->content));
            $id = $temp->id;
            $thumbnail = $temp->thumbnail;
            $title = $temp->title;
            $arr[] = array('id' => $id, 'thumbnail' => $thumbnail, 'title' => $title);
        }
        return response()->json($arr);
    }

    //ajax
    public function getContent($id){
        $tpl = ProductNoSaleSampleTemplate::where('id', $id)->first();
        return response()->json(['squeeze_thankyou_page' => $tpl->squeeze_thankyou_page,
                                'download_content_page' => $tpl->download_content_page]);
    }

    //ajax
    public function getSaleContent($id){
        $tpl = ProductSaleSampleTemplate::where('id', $id)->first();

        return response()->json(['sales_page_content' => $tpl->sales_page_content,
                'squeeze_thankyou_page' => $tpl->squeeze_thankyou_page, 'download_content_page' => $tpl->download_content_page,
                'exit_popup_sales_page_content' => $tpl->exit_popup_sales_page_content,
                'exit_popup_download_page' => $tpl->exit_popup_download_page]);
    }
}
