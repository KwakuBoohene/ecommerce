@extends('layouts.mainlayout')

@section('content')


    </header>
    <!-- section-header.// -->
    <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Checkout</h2>
        </div>
        <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <header class="card-header">
                            <h4 class="card-title mt-2">Billing Details</h4>
                        </header>
                        <article class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <!-- form-group end.// -->
                                    <div class="col form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <!-- form-group end.// -->
                                </div>
                                <!-- form-row end.// -->
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <!-- form-group end.// -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- form-group end.// -->
                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <select id="inputState" class="form-control">
                                            <option> Choose...</option>
                                            <option>Uzbekistan</option>
                                            <option>Russia</option>
                                            <option selected="">United States</option>
                                            <option>India</option>
                                            <option>Afganistan</option>
                                        </select>
                                    </div>
                                    <!-- form-group end.// -->
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <!-- form-group end.// -->
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="">
                                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <!-- form-group end.// -->
                                <div class="form-group">
                                    <label>Order Notes</label>
                                    <textarea class="form-control" name="notes" rows="6"></textarea>
                                </div>
                                <!-- form-group end.// -->
                            </form>
                        </article>
                    </div>
                    <!-- card.// -->
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <header class="card-header">
                                    <h4 class="card-title mt-2">Your Order</h4>
                                </header>
                                <article class="card-body">

                                @foreach (Cart::content() as $item)
                                <ul>
                                    <li class="font-weight-bold">{{$item->model->name}} </li>
                                </ul>

                                @endforeach
                                    <dl class="dlist-align font-weight-bold font-italic">
                                        <dt>Total cost: </dt>
                                        <dd class="text-right h5 b"> GHC {{Cart::total()}} </dd>
                                    </dl>
                                </article>
                            </div>
                        </div>

                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <header class="card-header">
                                    <h4 class="card-title mt-2">Payment Method</h4>
                                </header>
                                <article class="card-body">
                                    <label class="form-check">
                                      <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                      <span class="form-check-label">
                                        Stripe
                                      </span>
                                    </label>
                                    <label class="form-check">
                                      <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                      <span class="form-check-label">
                                       Mobile Money
                                      </span>
                                    </label>

                                </article>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button class="subscribe btn btn-success btn-lg btn-block" type="button">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
