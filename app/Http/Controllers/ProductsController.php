<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $products = Product::inRandomOrder()->take(3)->get();
        $categories = Category::all();

        $data = array('products'=>$products,
        'categories'=>$categories);

        return view('products-list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function show($id){

        $product = Product::where('id',$id)->firstOrFail();
        return view('product-detail')->with('product',$product);
     }

}
