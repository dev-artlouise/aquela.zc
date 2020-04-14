@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h2>Apartment Units</h2>

    <div class="row">

        @foreach ($allUnits as $unit)
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('dummy.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{$unit->name}}</h4>
                        <p class="card-text">{{$unit->description}}</p>
                        <h3>Price: ₱ {{$unit->price}}</h3>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-success" href="{{ route('list.add', $unit->id)}}" class="card-link">Add to list</a>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>


</div>
@endsection
