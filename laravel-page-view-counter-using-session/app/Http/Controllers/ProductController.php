<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('index', compact($products));
    }

    public function show($id)
    {
        $productKey = 'product_'.$id;
        if(!Session::has($productKey)){
            Product::where('id', $id)->increment('view_count');
            Session::put($productKey, 1);
        }
        $product = Product::find($id);
        return view('show', compact('product'));

    }
}
