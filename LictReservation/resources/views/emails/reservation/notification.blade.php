@component('mail::message')
# New Reservation Request

You have a new reservation Request.

The details of the reservation are:
<br>
Name : Saurav Lal Karn <br>
Hall : Hall A <br>
Date : 2017-11-12 <br>
From : 12:00 AM <br>
To   : 2:00 PM <br>

@component('mail::button', ['url' => $accept_url])
Approve Reservation
@endcomponent

@component('mail::button', ['url' => $decline_url])
    Decline Reservation
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
