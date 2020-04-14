<?php

namespace App\Mail;

use App\Apartment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApartmentActivationRequest extends Mailable
{
    use Queueable, SerializesModels;


    public $apartment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Apartment $apartment)
    {
        $this->apartment = $apartment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.admin.apartment-activation');
    }
}
