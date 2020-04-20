@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Reservation/s</h2>

            <form action=" {{ route('bookings.store') }}" method="POST">
                @csrf
                <h3>Your Detail</h3>
                <div class="form-group">
                    <input class="form-control" type="text" name="billing_fullname" id="" placeholder="Full Name">
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="billing_address" id="" placeholder="Address">
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="billing_city" id="" placeholder="City">
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="billing_phone" id="" placeholder="Phone/Contact Number">
                </div>

                <h4>Payment Options</h4>

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="payment_method" id="" value="over_the_counter">
                        Over the Counter
                    </label>
                </div>    
            
                <!--Paypal option-->
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="payment_method" id="" value="paypal">
                        Paypal
                    </label>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Reserve Unit</button>
            </form>
            
    </div>
@endsection
    <!--<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
    <script>paypal.Buttons().render('body');</script>-->
