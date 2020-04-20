@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <h2>Unit Products</h2>

        <div class="row">
            @foreach ($allUnits as $unit)
            
                <div class="col-4">
                    <div class="card">
                         <img src="{{ asset('storage/'. $unit->image ) }}" class="img-thumbnail"  alt="apartment unit image">
                        <div class="card-body">
                            <h4 class="card-title">{{ $unit->name }}</h4>
                            <p class="card-text"> {{ $unit->price }}</p>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('list.add', $unit->id ) }} " class="card-link">Reserve</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    </div>

@endsection
