@extends('layouts.app')

@section('content')

    <div class="unit-section container">

        <div class="container">

            <div class="row">
        
              <div class="col-lg-3">
                <h1 class="my-4"></h1>
                <div class="list-group">
                  <a href="#" class="list-group-item active">Category 1</a>
                  <a href="#" class="list-group-item">Category 2</a>
                  <a href="#" class="list-group-item">Category 3</a>
                </div>
              </div>
              
        
              <div class="col-lg-9">
                
                <!-- unit Info-->
                <div class="card mt-4">
                    <div class="unit-section-image col-8">
                        <img class="card-img-top img-fluid img-thumbnail w-100 " src="/storage/{{ $unit->unit_image }}" alt="apartment unit image">
                    </div>

                    <div class="card-body">
                            <h3 class="card-title">{{ $unit->name }}</h3>
                            <h5 class="text center">{{ $unit->address }}, {{ $unit->city }} City</h5>
                            <h5>₱ {{ $unit->price }}.00</h5>
                            ratings ste aki

                            <div class="unit-description">
                                <h4>Description<h4>
                                <p class="card-text">{{ $unit->description }}</p>
                            </div>
                        <div>
                            <a href="{{ route('list.add', $unit->id) }}" class="btn btn-success">Add to list</a>
                        </div>
                    </div>
                </div>
                <!-- unit Info-->
        
                <div class="card card-outline-secondary my-4">
                  <div class="card-header">
                    Reviews
                  </div>
                  <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                    <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                    <hr>
                    <a href="#" class="btn btn-success">Leave a Review</a>
                  </div>
                </div>
                <!-- /.card -->
        
              </div>
              <!-- /.col-lg-9 -->
        
            </div>
        
          </div>
       
    <div>

@endsection