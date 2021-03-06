@extends('layouts.mainlayout')
@section('content')
<!-- section-header.// -->
        <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Category Page</h2>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->

<section class="section-content bg padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-sm-3">


                <div class="card card-filter">
                    <article class="card-group-item">
                        <header class="card-header">
                            <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapse22">
                                <i class="icon-action fa fa-chevron-down"></i>
                                <h6 class="title">By Category</h6>
                            </a>
                        </header>
                        <div style="" class="filter-content collapse show" id="collapse22">
                            <div class="card-body">
                                <form class="pb-3">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Search" type="text">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>

                                <ul class="list-unstyled list-lg">
                                    @foreach ($categories as $category)
                                    <li><a href="#"> {{$category->name}} <span class="float-right badge badge-light round">142</span> </a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- card-body.// -->
                        </div>
                        <!-- collapse .// -->
                    </article>
                    <!-- card-group-item.// -->
                    <article class="card-group-item">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse33">
                                <i class="icon-action fa fa-chevron-down"></i>
                                <h6 class="title">By Price  </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse33">
                            <div class="card-body">
                                <input type="range" class="custom-range" min="0" max="100" name="">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Min</label>
                                        <input class="form-control" placeholder="$0" type="number">
                                    </div>
                                    <div class="form-group text-right col-md-6">
                                        <label>Max</label>
                                        <input class="form-control" placeholder="$1,0000" type="number">
                                    </div>
                                </div>
                                <!-- form-row.// -->
                                <button class="btn btn-block btn-outline-primary">Apply</button>
                            </div>
                            <!-- card-body.// -->
                        </div>
                        <!-- collapse .// -->
                    </article>
                    <!-- card-group-item.// -->
                </div>
                <!-- card.// -->

            </aside>
            <!-- col.// -->
            <main class="col-sm-9">
                @foreach($products as $product)

                <article class="card card-product">
                    <div class="card-body">
                        <div class="row">
                            <aside class="col-sm-3">
                                <div class="img-wrap"><img src={{$product->image}}></div>
                            </aside>
                            <!-- col.// -->
                            <article class="col-sm-6">
                                <h4 class="title"> {{$product->name}} </h4>
                                <div class="rating-wrap  mb-2">
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
                            <p>{{$product->details}}</p>
                            </article>
                            <!-- col.// -->
                            <aside class="col-sm-3 border-left">
                                <div class="action-wrap">
                                    <div class="price-wrap h4">
                                        <span class="price"> GHC {{$product->price}}.00 </span>
                                    </div>
                                    <!-- info-price-detail // -->
                                    <p class="text-success">Free shipping</p>
                                    <br>
                                    <p>
                                        <form action={{ route('cart.store') }} method="post" class="float-right">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value={{$product->id}}>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fas fa-shopping-cart"></i> Add to cart
                                            </button>
                                            </form>

                                        <a href={{ route('product-detail', $product->id) }} class="btn btn-secondary"> Details  </a>
                                    </p>
                                </div>
                                <!-- action-wrap.// -->
                            </aside>
                            <!-- col.// -->
                        </div>
                        <!-- row.// -->
                    </div>
                    <!-- card-body .// -->
                </article>
                <!-- card product .// -->
                @endforeach


            </main>
            <!-- col.// -->
        </div>

    </div>
    <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@endsection
