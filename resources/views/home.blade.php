@extends('layouts.app')

@section('content')

    <div class="container text-center">

        <div>
        <form class="form-inline" action="{{ route('apartment.search') }}" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Name of apartment or location..." aria-label="Search" name="query">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

        <h2>Apartment</h2>
        
        <div class="row">
            @foreach ($units as $unit)
            
                <div class="col-sm-12 col-xs-12 col-md-4 pb-5">
                    <div class="card ">
                        <img src="/storage/{{ $unit->unit_image }}" class="img-thumbnail"  alt="apartment unit image">
                        <div class="card-body">
                            <a href="{{ route('units.show', $unit) }}"><h3 class="card-title">{{ $unit->name }}</h3></a>
                            <h3>{{ $unit->address }}</h3>
                            <h4>{{ $unit->city }}</h4>
                            <h2>₱ {{ $unit->price }}.00</h2>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('list.add', $unit->id)}}" class="card-link btn btn-outline-success">Add to list</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>

@endsection
