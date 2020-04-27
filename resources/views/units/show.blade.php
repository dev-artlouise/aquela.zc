@extends('layouts.app')

@section('content')

    <div class="container">
        <div>
            <h2></h2>
            <img src="/storage/{{ $unit->unit_image }}" class="img-thumbnail"  alt="apartment unit image">
            <h2>{{ $unit->name }}</h2>
            <h2>{{ $unit->price }}</h2>
            <h2>{{ $unit->address }}</h2>
            <h2>{{ $unit->city }}</h2>
            <h2>{{ $unit->description }}</h2>
            <a href="{{ route('list.add', $unit->id) }}" class="btn btn-success">Add to list</a>
        </div>
    <div>
@endsection