@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="section-title-4 text-center mb-40">
        <h2>Top Products</h2>
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
