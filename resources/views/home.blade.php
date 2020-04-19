@extends('layouts.master')

@section('content')

<div class="container-fluid">

    <div class="pl-200 pr-300">
        <div class="categori-menu-slider-wrapper clearfix">
            <div class="menu-slider-wrapper">
                <div class="menu-style-3 menu-hover text-center">
                    <nav>
                        <ul>
                            <li><a href="index.html">HOME</li>

                            <li><a href="#">PAGES<i class="pe-7s-angle-down"></i></a>
                                <ul class="single-dropdown">
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="blog.html">blog <i class="pe-7s-angle-down"></i>
                                    <ul class="single-dropdown">
                                        <li><a href="blog.html">blog 3 colunm</a></li>
                                        <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                    </ul>
                                </li>-->
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="slider-area">
                    <div class="slider-active owl-carousel">
                        <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(assets/img/slider/5.jpg)">
                            <div class="slider-animation slider-content-style-3 fadeinup-animated">
                                <h2 class="animated">Welcome to<br>Arkela.zc</h2>
                                <h4 class="animated">Book your stays or Host your apartment </h4>
                                <a class="electro-slider-btn btn-hover" href="product-details.html">Learn More</a>
                            </div>
                        </div>
                        <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(assets/img/slider/20.jpg)">
                            <div class="slider-animation slider-content-style-3 fadeinup-animated">
                                <h2 class="animated">Invention of <br>design platform</h2>
                                <h4 class="animated">Best Product With warranty </h4>
                                <a class="electro-slider-btn btn-hover" href="#">buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-title-4 text-center mb-40">
        <h2>Apartment Units</h2>
    </div>
    <div class="top-product-style">
        <div>
            <div id="electro1">
                <div class="custom-row-2">

                    @foreach($allUnits as $unit)

                    <div class="custom-col-style-2 custom-col-4">
                        <div class="product-wrapper product-border mb-24">
                            <div class="product-img-3">
                                <a href="product-details.html">
                                    <img src="assets/img/product/electro/1.jpg" alt="">
                                </a>
                                <div class="product-action-right">
                                    <a class="animate-right" href="#" data-target="#exampleModal" data-toggle="modal" title="Quick View">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                    <a class="animate-top" title="Add To list" href="{{ route('list.add',  $unit->id) }}">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-4 text-center">
                                
                                <!-- FOR RATING
                                div class="product-rating-4">
                                </div>
                                -->

                                <h4><a href="product-details.html">{{ $unit->name }}</a></h4>
                                <!--<span>Headphone</span>-->
                                <h5>₱ {{ $unit->price }}</h5>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
