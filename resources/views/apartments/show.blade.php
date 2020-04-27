@extends('layouts.app')

@section('content')

<div class="container text-center">

    <div>
    <form class="form-inline" action="{{ route('apartment.search') }}" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Name of apartment or location..." aria-label="Search" name="query">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>

    <div class="row">
        
    </div>

</div>


@endsection