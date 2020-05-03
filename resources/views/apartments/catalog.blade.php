@extends('layouts.app')

@section('content')
    <div class="container text-center">

        <div>
            <form class="form-inline" action="{{ route('apartment.search') }}" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Name of apartment or location..." aria-label="Search" name="query">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

        <div class="unit-found">
            <h2>Search Results {{ $apartments->count() }}</h2>
         </div>

        <div class="row">
            @foreach($apartments as $apartment)
                    <div class="col-4">
                        <div class="card">
                            <img src="/assets" class="img-thumbnail" alt="apartment unit image">
                            <div class="card-body">
                                <h3 class="card-title">{{ $apartment->name }}</h3>
                                <h4>{{ $apartment->address}}</h4>
                                <h4>{{ $apartment->city}} City</h4>
                            </div>
                            <div class="card-body">
                                <a href="#" class="card-link btn btn-outline-success">Visit</a>
                            </div>
                        </div>
                    </div>
            @endforeach
         </div>

         
    </div>
@endsection