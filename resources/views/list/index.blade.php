@extends('layouts.master')

@section('content')

    <div class="cart-main-area">
        <div class="container">
            <h1>Your Apartment list</h1>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>remove</th>
                                        <th>images</th>
                                        <th>Apartment Name</th>
                                        <th>Unit Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listItems as $item)
                                        <tr>
                                            <td class="product-remove"><a href="{{ route('list.destroy', $item->id) }}"><i class="pe-7s-close"></i></a></td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{ $item->name}}</a></td>
                                            <td class="product-price-cart"><span class="amount">{{ Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</span></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="cart-page-total">
                                    <h2>Grand Total</h2>
                                    <ul>
                                        <li>Total<span> Total Price: ₱ {{ \Cart::session(auth()->id())->getTotal()}}</span></li>
                                    </ul>
                                    <a href="{{ route('list.reserve') }}" role="button">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection