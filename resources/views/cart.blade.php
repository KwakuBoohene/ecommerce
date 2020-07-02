@extends('layouts.mainlayout')

@section('content')
    <!-- section-header.// -->
    <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Cart</h2>


        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content bg padding-y border-top">
        <div class="container">

            <div class="row">



                <main class="col-sm-9">

                    <div class="">
                        @if (session()->has('success_message'))
                            <div class="alert alert-success">
                                {{session()->get('success_message')}}
                            </div>
                        @endif

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        @if (Cart::count() > 0)
                            <div class="alert alert-primary">
                                You have {{Cart::count()}} item(s) in you cart
                            </div>
                        </div>

                        <div class="card">
                            <table class="table table-hover shopping-cart-wrap">
                                <thead class="text-muted">
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col" width="120">Quantity</th>
                                        <th scope="col" width="120">Price</th>
                                        <th scope="col" class="text-right" width="200">Action</th>
                                    </tr>
                                </thead>
                        @else
                        <div class="alert alert-secondary">
                            You have {{Cart::count()}} item(s) in you cart
                        </div>
                    </div>
                    <div class="card">
                        <table class="table table-hover shopping-cart-wrap">
                            <thead class="text-muted">
                            </thead>
                        @endif



                            <tbody>
                                @foreach ($cartItems as $item)
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src={{$item->model->image}} class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">

                                                <h6 class="title text-truncate">{{$item->model->name}}   </h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Size: </dt>
                                                    <dd>XXL</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>Orange color</dd>
                                                </dl>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                        <var class="price">GHC {{$item->price}}.00</var>

                                        </div>
                                        <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">
                                        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>

                                        <form action={{ route('cart.destroy', $item->rowId) }} method="post" class="float-right ml-2">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                            <button class="btn btn-outline-danger" type="submit"> × Remove</button>
                                        </form>
                                    </td>
                                </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <!-- card.// -->

                </main>
                <!-- col.// -->
                <aside class="col-sm-3">
                    <p class="alert alert-success">Add USD 5.00 of eligible items to your order to qualify for FREE Shipping. </p>
                    <dl class="dlist-align">
                        <dt>Total price: </dt>
                        <dd class="text-right">GHC {{Cart::subtotal()}} </dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Tax: </dt>
                        <dd class="text-right">GHS {{Cart::tax()}} </dd>
                    </dl>
                    <dl class="dlist-align h4">
                        <dt>Total:</dt>
                        <dd class="text-right"><strong>GHS {{Cart::total()}} </strong></dd>
                    </dl>
                    <hr>
                    <figure class="itemside mb-3">
                        <aside class="aside"><img src="images/icons/pay-visa.png"></aside>
                        <div class="text-wrap small text-muted">
                            Pay 84.78 AED ( Save 14.97 AED ) By using ADCB Cards
                        </div>
                    </figure>
                    <figure class="itemside mb-3">
                        <aside class="aside"> <img src="images/icons/pay-mastercard.png"> </aside>
                        <div class="text-wrap small text-muted">
                            Pay by MasterCard and Save 40%.
                            <br> Lorem ipsum dolor
                        </div>
                    </figure>
                    <a href= {{ route('checkout.index') }} class="btn btn-success btn-lg btn-block">Proceed To Checkout</a>
                </aside>
                <!-- col.// -->
            </div>

        </div>
        <!-- container .//  -->
    </section>
@endsection
