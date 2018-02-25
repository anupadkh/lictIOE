<?php

namespace App\Mail;

use App\Reservations;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReservationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public  $reservation;
    public  $accept_url;
    public  $decline_url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reservations $reservations, $accept_url, $decline_url)
    {
        //
        $this->reservation  =   $reservations;
        $this->accept_url   =   $accept_url;
        $this->decline_url  =   $decline_url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sauravkarn541@gmail.com')
                ->markdown('emails.reservation.notification');
    }
}
