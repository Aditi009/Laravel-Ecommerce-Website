@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
<style>
    #offer img{
        height:210px;
        margin: 30px;
        margin-left: -10px;
    }
</style>
<!-- start hero section -->
<div class="hero-image">
    <div class="hero-content">
        <div class="col-md-4 hero-text">
            <h3>
                WELCOME TO ADISOFT ECOMMERCE WEBSITE
            </h3>
            <p>It is an exclusive web store for Indian Ethnic outfits offering an exclusive collection of Indian ethnic clothing right from saris, salwar kameez, lehengas, Indo-western wear to footwear, handbags, jewellery, and accessories. ... Apparel. Fashion. Ecommerce.</p>
            <button class="btn custom-border my-2 my-sm-0">Shop</button>
            <button class="btn custom-border my-2 my-sm-0">Contact Us</button>
        </div>
    </div>
</div>
<!-- end hero section -->
<!-- start page content -->
<div class="container">
    <div class="content-head">
        <h1 id="h1" style="text-align:center; font-weight: bold">Ecommerce</h1>
        <p style="text-align: center">It is an exclusive web store for Indian Ethnic outfits offering an exclusive collection of Indian ethnic clothing right from saris, salwar kameez, lehengas, Indo-western wear to footwear, handbags, jewellery, and accessories. ... Apparel. Fashion. Ecommerce.</p> </div>
  <div style="margin-top: 20px">;

    <div class="container">
     <div class="row" id="offer">
         <div class="col-md-4"><img src="{{asset('images/download.jpg')}}" style="width: 100%"></div>
         <div class="col-md-4"><img src="{{asset('images/maxresdefault.jpg')}}" style="width: 100%"></div>
         <div class="col-md-4"><img src="{{asset('images/mobile.jpg')}}" style="width: 100%"></div>


     </div>
    </div>
        <h2 class="header text-center" id="h2">Featured Products</h2>
    <!-- start products row -->
    <div class="row">
        @foreach ($products as $product)
            <!-- start single product -->
            <div class="col-md-6 col-sm-12 col-lg-4 product">
                <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                    <div class="card view overlay zoom">
                        <img src="{{ productImage($product->image) }}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}<br><span style="font-size: 16px;color:grey">adisoft.com</span><span class="float-right">$ {{ format($product->price) }}<br><span class="badge badge-warning">10% off</span></span></h5>
                            {{-- <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fas fa-cart-plus"></i></a>
                                <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a>
                                <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single product -->
        @endforeach
    </div>
  </div>
    <!-- end products row -->
    <div class="show-more">
        <a href="{{ route('shop.index') }}">
            <button class="btn custom-border-n">Show more</button>
        </a>
    </div>
    <hr>
    <div class="six">
    <h2 class="header text-center" id="h3">Hot Sales</h2>
    </div>
    <!-- start products row -->
    <div class="row">
        @foreach ($hotProducts as $product)
            <!-- start single product -->
            <div class="col-md-6 col-sm-12 col-lg-4 product">
                <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                    <div class="card view overlay zoom">
                        <img src="{{ productImage($product->image) }}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}<br><span style="font-size: 16px;color:grey">adisoft.com</span><span class="float-right">$ {{ format($product->price) }}<br><span class="badge badge-primary">30% off</span></span></h5>
                            {{-- <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fas fa-cart-plus"></i></a>
                                <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a>
                                <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </a>
            </div>
            <!-- end single product -->
        @endforeach
    </div>
    <!-- end products row -->
</div>
<!-- end page content -->

@endsection
