@extends('layouts.app')

@section('content')

    <h2>Your Apartment List</h2>

   
    <table class="table">
        <thead>
            <tr>
                <th>Apartment Name</th>
                <th>Unit Price</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($listItems as $item)
                <tr>
                    <td scope="row">
                        <a href="#">{{ $item->name}}</a>
                    </td>

                    <td>
                        {{ Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
                    </td>

                    <td>
                        <a class="btn btn-danger" href="{{ route('list.destroy', $item->id) }}">Remove</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>
        Total Price: ₱ {{ \Cart::session(auth()->id())->getTotal()}}
    </h3>

    <a class="btn btn-primary" href="{{ route('list.reserve')}}" role="button">Proceed Reserve Apartment Unit</a>

@endsection