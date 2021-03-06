@extends('layouts.mainlayout')

@section('content')


<!-- ========================= SECTION MAIN END// ========================= -->
<!-- ========================= Blog ========================= -->
<section class="section-content padding-y-sm bg">
    <div class="container">
        <header class="section-heading heading-line">
            <h4 class="title-section bg">Featured Categories</h4>
        </header>
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
            <div class="col-md-4">
                <div class="card-banner" style="height:250px; background-image: url({{$categories[$i]->image}});">
                    <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                        <div class="text-center">
                        <h5 class="card-title"> {{$categories[$i]->name}}</h5>
                            <a href="#" class="btn btn-warning btn-sm"> View All </a>
                        </div>
                    </article>
                </div>
                <!-- card.// -->
            </div>
            @endfor



        </div>
    </div>
</section>
<!-- ========================= Blog .END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y-sm bg">
    <div class="container">

        <header class="section-heading heading-line">
            <h4 class="title-section bg">FEATURED PRODUCTS</h4>
        </header>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
                <figure class="card card-product">
                    <div class="img-wrap"><img src={{$product->image}} ></div>
                    <figcaption class="info-wrap">
                        <h4 class="title">{{ $product->name}} </h4>
                        <p class="desc"> {{$product->details}} </p>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="label-rating">132 reviews</div>
                            <div class="label-rating">154 orders </div>
                        </div>
                        <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <div class="price-wrap h5">
                            <span class="price-new"> GHC {{$product->price}}.00 </span>
                            </div>
                        <span>
                            <form action={{ route('cart.store') }} method="post" class="float-right">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value={{$product->id}}>
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="fas fa-shopping-cart"></i> Add to cart
                                </button>
                                </form>
                            <a href={{ route('product-detail', $product->id) }} class="btn btn-sm btn-secondary float-right mr-1"> Details  </a>
                        </span>


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

<!-- ========================= SECTION ITEMS ========================= -->
<section class="section-request bg padding-y-sm">
    <div class="container">
        <header class="section-heading heading-line">
            <h4 class="title-section bg text-uppercase">Recently Added</h4>
        </header>
        <div class="row">
            @foreach ($products2 as $product)
            <div class="col-md-3">
                <figure class="card card-product">
                    <div class="img-wrap"><img src= {{$product->image}}></div>
                    <figcaption class="info-wrap">
                        <h4 class="title">{{ $product->name}} </h4>
                        <p class="desc">{{ $product->detail }} </p>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="label-rating">132 reviews</div>
                            <div class="label-rating">154 orders </div>
                        </div>
                        <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <div class="price-wrap h5">
                            <span class="price-new"> GHC {{$product->price}}.00 </span>
                            </div>
                        <span>
                            <form action={{ route('cart.store') }} method="post" class="float-right">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value={{$product->id}}>
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="fas fa-shopping-cart"></i> Add to cart
                                </button>
                                </form>
                            <a href={{ route('product-detail', $product->id) }} class="btn btn-sm btn-secondary float-right mr-1"> Details  </a>
                        </span>


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
    <!-- container // -->
</section>


@endsection
