<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Gloudemans\Shoppingcart\Facades\Cart;



use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::inRandomOrder()->get();
        $cartItems = Cart::content();
        $data = array(
            'cartItems' => $cartItems,
            'categories' => $categories
        );

        return view('cart')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = Product::where('id',$request->id)->firstOrFail();
        $duplicates = Cart::search(function($cartItem, $rowId) use ($product){
            return $cartItem->id === $product->id;
        });

        if($duplicates->isNotEmpty()){
            return redirect()->route('cart.index')->with('success_message','Item is already in your cart');
        }else{
            Cart::add($product->id,$product->name,1,$product->price)->associate('App\Product');
        }


        return redirect()->route('cart.index')->with('success_message','Item was added to your cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        Cart::remove($id);

        return back()->with('success_message','Item has been removed');
    }

    public function empty(){
        Cart::destroy();
    }
}
