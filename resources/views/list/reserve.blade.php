@extends('layouts.app')

@section('content')
    <div class="container">
        
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">

              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your Reservation</span>
              </h4>

              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Product name</h6>
                    <small class="text-muted">Brief description</small>
                  </div>
                    <span class="text-muted">Price</span>
                </li>
    
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total Price</span>
                  <strong>Aki el Price</strong>
                </li>
              </ul>
        
            </div>
            <div class="col-md-8 order-md-1">
              <h4 class="mb-3">Billing Form</h4>
              <form action=" {{ route('bookings.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="form-group">
                        <label for="billing_fullname">Full Name</label>
                        <input class="form-control" type="text" name="billing_fullname" id="" placeholder="Full Name">
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email">Phone/Contact Number</label>
                            <input class="form-control" type="text" name="billing_phone" id="" placeholder="Phone/Contact Number">
                        </div>
                    </div>
                <!--
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        </div>
                    </div>
                -->
                </div>
                
        
                <div class="row">
    
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input class="form-control" type="text" name="billing_address" id="" placeholder="Address">
                    </div>
                  </div>
    
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="state">City</label>
                        <input class="form-control" type="text" name="billing_city" id="" placeholder="City">
                    </div>
                  </div>
                  
                </div>
    
                <h4 class="mb-3">Payment</h4>
        
                <div class="d-block my-3">
    
                    <div class="d-block my-3">

                        <div class="custom-control custom-radio">
                            <input id="over_the_counter" name="payment_method" type="radio" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="over_the_counter">Over The Counter</label>
                        </div>
                        
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="payment_method" type="radio" class="custom-control-input" >
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>

                    </div>
    
                </div>
    
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue for Reservation</button>
        
              </form>
            </div>
        </div>
        
    </div>

    
    
    

@endsection
    <!--<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
    <script>paypal.Buttons().render('body');</script>-->
