@extends('layouts.app')

@section('content')

    <div class="cart-main-area">
        <div class="container">
            <h1>Apartment Details Summary</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>Unit Image</th>
                        <th>Apartment Name</th>
                        <th>Unit Price</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listItems as $item)
                        <tr>
                            <td scope ="row"><img src="/storage/{{ $item->unit_image }}" class="img-thumbnail"  alt="apartment unit image"></td>
                            <td class="product-name">{{ $item->name}}</td>
                            <td class="product-price-cart"><span class="amount">{{ Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</span></td>
                            <td>
                                <a class="btn btn-danger" href="{{ route('list.destroy', $item->id) }}">Remove</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        

        </div>
        <a class="btn btn-primary" href="{{ route('list.reserve') }}">Proceed to Reservation</a>
 
@endsection