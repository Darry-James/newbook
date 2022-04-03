<?php
use App\Models\Product;

function shortName($name) {
    $shortName = "";

    $names = explode(" ", $name);

    foreach ($names as $w) {
        $shortName .= $w[0];
    }
    return $shortName;
}

function myProductsFromFunnel($userId, $funnel_id) {
   $products = Product::where('created_by', $userId,)->where('funnel_id', $funnel_id)->get();
   return $products->count();
}

function myTemplatesCount($products){
    $x = 0;
    foreach ($products as $product) {
        if (isset($product->sales_page_content)) {
            $x++;
        }
        if (isset($product->squeeze_thankyou_page)) {
            $x++;
        }
        if (isset($product->download_content_page)) {
            $x++;
        }
        if (isset($product->exit_popup_sales_page_content)) {
            $x++;
        }
        if (isset($product->exit_popup_download_page)) {
            $x++;
        }
    }
    return $x;
}

