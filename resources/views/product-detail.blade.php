@extends('layouts.mainlayout')


@section('content')
       <!-- ========================= SECTION PAGETOP ========================= -->
       <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Product Detail View</h2>
        </div>
        <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row no-gutters">
                            <aside class="col-sm-5 border-right">
                                <article class="gallery-wrap">
                                    <div class="img-big-wrap">
                                        <div>
                                            <a href="images/items/1.jpg" data-fancybox=""><img src={{$product->image}}></a>
                                        </div>
                                    </div>
                                    <!-- slider-product.// -->
                                    <div class="img-small-wrap">
                                        @foreach($products as $p)
                                        <div class="item-gallery"> <img src={{$p->image}}></div>
                                        @endforeach
                                        <div class="item-gallery"> <img src="images/items/2.jpg"></div>
                                    </div>
                                    <!-- slider-nav.// -->
                                </article>
                                <!-- gallery-wrap .end// -->
                            </aside>

                            <aside class="col-sm-7">
                                <article class="p-5">
                                    <h3 class="title mb-3">{{$product->name}}</h3>

                                    <div class="mb-3">
                                        <var class="price h3 text-warning">
        <span class="currency">GHC </span><span class="num">{{$product->price}}.00</span>
    </var>

                                    </div>
                                    <!-- price-detail-wrap .// -->
                                    <dl>
                                        <dt>Description</dt>
                                        <dd>
                                            <p>{{$product->details}}</p>
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-3">Model#</dt>
                                        <dd class="col-sm-9">12345611</dd>

                                        <dt class="col-sm-3">Color</dt>
                                        <dd class="col-sm-9">Black and white </dd>

                                        <dt class="col-sm-3">Delivery</dt>
                                        <dd class="col-sm-9">Russia, USA, and Europe </dd>
                                    </dl>
                                    <div class="rating-wrap">

                                        <ul class="rating-stars">
                                            <li style="width:80%" class="stars-active">
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <div class="label-rating">132 reviews</div>
                                        <div class="label-rating">154 orders </div>
                                    </div>
                                    <!-- rating-wrap.// -->
                                    <hr>
                                    {{-- <div class="row">
                                        <div class="col-sm-5">
                                            <dl class="dlist-inline">
                                                <dt>Quantity: </dt>
                                                <dd>
                                                    <select class="form-control form-control-sm" style="width:70px;">
                                                        <option> 1 </option>
                                                        <option> 2 </option>
                                                        <option> 3 </option>
                                                    </select>
                                                </dd>
                                            </dl>
                                            <!-- item-property .// -->
                                        </div>
                                        <!-- col.// -->
                                        <div class="col-sm-7">
                                            <dl class="dlist-inline">
                                                <dt>Size: </dt>
                                                <dd>
                                                    <label class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <span class="form-check-label">SM</span>
                                                    </label>
                                                    <label class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <span class="form-check-label">MD</span>
                                                    </label>
                                                    <label class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <span class="form-check-label">XXL</span>
                                                    </label>
                                                </dd>
                                            </dl>
                                            <!-- item-property .// -->
                                        </div>
                                        <!-- col.// -->
                                    </div> --}}
                                    <!-- row.// -->
                                    <hr>
                                    <a href="#" class="btn  btn-primary"> Buy now </a>
                                    <form action={{ route('cart.store') }} method="post">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-outline-primary">
                                        <i class="fas fa-shopping-cart"></i> Add to cart
                                    </button>
                                    </form>
                                    {{-- <a href="#" class="btn  btn-outline-primary"> <i class="fas fa-shopping-cart"></i> Add to cart </a> --}}
                                </article>
                                <!-- card-body.// -->
                            </aside>
                            <!-- col.// -->
                        </div>
                        <!-- row.// -->
                    </div>
                    <!-- card.// -->

                </div>
                <div class="col-md-12">
                    <article class="card mt-4">
                        <div class="card-body">
                            <h4>Detail overview</h4>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi deserunt mollit anim id est laborum.</p>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteurididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <!-- card-body.// -->
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    <section class="section-content padding-y-sm bg">
        <div class="container">

            <header class="section-heading heading-line">
                <h4 class="title-section bg">Related PRODUCTS</h4>
            </header>
            <div class="row">
                @foreach($products as $p)
                <div class="col-md-4">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src={{$p->image}}></div>
                        <figcaption class="info-wrap">
                        <h4 class="title">{{$p->name}}</h4>
                        <p class="desc">{{$p->details}}</p>

                            <!-- rating-wrap.// -->
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href={{ route('product-detail', $p->id ) }} class="btn btn-sm btn-secondary float-right">Details</a>
                            <div class="price-wrap h5">
                                <span class="price-new">GHC {{$p->price}}.00</span>
                            </div>
                            <!-- price-wrap.// -->
                        </div>
                        <!-- bottom-wrap.// -->
                    </figure>
                </div>
                @endforeach
                <!-- col // -->

            </div>
            <!-- row.// -->

        </div>
        <!-- container .//  -->
    </section>

    <!-- ========================= Subscribe ========================= -->

@endsection
