<?php

namespace App\Http\Controllers;

use App\Halls;
use App\Mail\ReservationNotification;
use App\Reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use Validator;

class ReservationController extends Controller
{
    //
    public  $request;
    public  $halls;
    public  $reservations;

    function __construct(Request $request, Halls $halls, Reservations $reservations)
    {
        $this->request  =   $request;
        $this->halls    =   $halls;
        $this->reservations =   $reservations;
    }


    /*
		Return view page for reservation section
    */
    public  function index(){
        return view('reservation');
    }

    /**
     * Add reservation
     * */
    public  function add(){
        try{

            $validator  =   Validator::make($this->request->all(), [
                'hall'     =>  'required|max:55',
                'date'     =>  'required|date|after:'.date('Y-m-d'),
                'from'     =>  'required',
                'to'       =>  'required'
            ]);

            if($validator->fails()){
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput($this->request->all());
            }

            $inputs     =   $this->request->all();

            $reservations   =   Reservations::where('date', $this->request->input('date'))
                                                ->get();

            foreach ($reservations as $reservation){
                if(($inputs['from'] > $reservation->from) && ($inputs['from'] < $reservation->to)){
                    return redirect()->route('home')->with('data', sendHttpResponse('', "Reservation cannot be added. The hall is already booked in this time", 400));
                }

                if(($inputs['to'] < $reservation->from) && ($inputs['to'] > $reservation->to)){
                    return redirect()->route('home')->with('data', sendHttpResponse('', "Reservation cannot be added. The hall is already booked in this time", 400));
                }
            }

            $user_id    =   Auth::user()->id;
            $entry   =  $this->reservations->createReservation($user_id, $this->request->all());

            $approve_url    =   route('approve-reservation', ['id'  =>  $entry->id]);
            $decline_url    =   route('decline-reservation', ['id'  =>  $entry->id]);

            Mail::to(env('ADMIN_EMAIL'))->send(new ReservationNotification($entry, $approve_url, $decline_url));
            return redirect()->route('home')->with('data', sendHttpResponse('', "Reservation added successfully", 200));
        }
        catch(\Exception $e){

            $message    =    $e->getMessage()." on line ".$e->getLine()." in file ".$e->getFile();
            dd($message);
            return $message;
        }
    }

    /**
     *
     * Approve the request of the reservation
     * */
    public  function  approve($id){
        try{
            $entry   =  $this->reservations->approveReservation($id);
            return "Reservation approved successfully";

//            return redirect()->route('home')->with('data', sendHttpResponse('', "Reservation approved successfully", 200));
        }
        catch(\Exception $e){
            return $e->getMessage()." on line ".$e->getLine()." in file ".$e->getFile();
        }
    }

    /**
     *
     * Deny the reservation for the user
     * */
    public function decline($id){
        try{
            $entry   =  $this->reservations->declineReservation($id);
            return "Reservation declined successfully";
            return redirect()->route('home')->with('data', sendHttpResponse('', "Reservation declined successfully", 200));
        }
        catch(\Exception $e){
            return $e->getMessage()." on line ".$e->getLine()." in file ".$e->getFile();
        }
    }
}
