<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class IndexController extends Controller
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
        $products2 = Product::inRandomOrder()->take(4)->get();
        $categories = Category::inRandomOrder()->get();

        $data = array('products'=>$products,
        'products2'=>$products2,
        'categories'=>$categories);

        return view('index')->with($data);
    }


}
