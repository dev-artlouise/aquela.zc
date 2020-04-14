<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use App\Mail\ReservationPaid;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    //Paypal Express checkout
    public function getExpressCheckout($bookingId){
       
        $checkoutData = $this->checkoutData($bookingId);

        $provider = new ExpressCheckout();

        $response = $provider->setExpressCheckout($checkoutData);

        return redirect($response['paypal_link']);
    }


    private function checkoutData($bookingId){

        $list = \Cart::session(auth()->id());

        $listUnits = array_map( function($unit){
            return [
                'name' => $unit['name'],
                'price' => $unit['price'],
                'qty' => $unit['quantity']
            ];
        }, $list->getContent()->toarray());

        $checkoutData = [
            'items' => $listUnits,
            'invoice_id' => uniqid(),
            'invoice_description' => "Order Description",
            'return_url' => route('paypal.success', $bookingId),
            'cancel_url' => route('paypal.cancel'),
            'total' => $list->getTotal()
        ];

        return $checkoutData;
    }


    public function getExpressCheckoutSuccess(Request $request, $bookingId){

        $token = $request->get('token');
        $payerId = $request->get('PayerID');
        $provider = new ExpressCheckout();
        $checkoutData = $this->checkoutData($bookingId);

        $response = $provider->getExpressCheckoutDetails($token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])){

            $payment_status = $provider->doExpressCheckoutPayment($checkoutData, $token, $payerId);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

            if(in_array($status,['Completed', 'Processed'])){

                $booking = Booking::find($bookingId);
                $booking->is_paid = 1;
                $booking->save();
                
                //send email
                Mail::to($booking->user->email)->send(new ReservationPaid($booking));

                return redirect()->route('home')->withMessage('Payment Success, Unit Has Been Reserved');
            }
        return redirect()->route('home')->withMessage('something went wrong !');
            
        }
    }

    public function cancelPage(){

        dd('payment failed');
    }


}
