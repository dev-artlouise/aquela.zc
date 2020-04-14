<?php

//this controls the Booking 
namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            //check validations
            'billing_fullname' => 'required',
            'billing_address' => 'required',
            'billing_city' => 'required',
            'billing_phone' => 'required',
            'payment_method' => 'required'
        ]);
        
    //Create Booking
        $booking = new Booking();
        //Generate Booking Number
        $booking->book_number = uniqid('BookingNumber-'); 
        $booking->billing_fullname = $request->input('billing_fullname');
        $booking->billing_address = $request->input('billing_address');
        $booking->billing_city = $request->input('billing_city');
        $booking->billing_phone = $request->input('billing_phone');

        //From imported Cart Package
        $booking->grand_total = \Cart::session(auth()->id())->getTotal();
        $booking->item_count = \Cart::session(auth()->id())->getContent()->count();

        $booking->user_id = auth()->id();
        
            //check if payment method is paypal
            if(request('payment_method') == 'paypal'){
                
                $booking->payment_method = 'paypal';
            }

        $booking->save();
    //Create Booking

        //save booking unit/s
        $listUnits = \Cart::session(auth()->id())->getContent();

            foreach($listUnits as $unit){

                $booking->units()->attach($unit->id, ['price'=> $unit->price, 'quantity'=> $unit->quantity]); 
            }

            //payment 
            if(request('payment_method') == 'paypal'){
                
                //redirect to paypal page
                return redirect()->route('paypal.checkout', $booking->id);
            }

        //empty cart
        \Cart::session(auth()->id())->clear();
        return redirect()->route('home')->withMessage('Reservation has been placed, Payment is Pending');


        //send email to customer


        //take user to thank you page

        return "Your Unit has been Reserved";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
