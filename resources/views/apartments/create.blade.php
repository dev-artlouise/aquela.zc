@extends('layouts.app')

@section('content')

    <h2>Create Apartment/s</h2>

    <form action=" {{ route('apartments.store') }}" method = "POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input class="form-control" type="text" name="name" id="" placeholder="Apartment Name">
        </div>
    
        <div class="form-group">
            <label for="information">Extra Information</label>
            <textarea class="form-control" name="information" id="" placeholder="Extra Information "></textarea>
        </div>   

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>

@endsection