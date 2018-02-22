<?php

namespace App\Http\Controllers;

use App\Halls;
use App\Reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
                'from'     =>  'required|after:'.date('h:i A'),
                'to'       =>  'required|after:'.date('h:i A')
            ]);

            if($validator->fails()){
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput($this->request->all());
            }

            $user_id    =   Auth::user()->id;
            $entry   =  $this->reservations->createReservation($user_id, $this->request->all());
            return redirect()->route('home')->with('data', sendHttpResponse('', "Reservation added successfully", 200));
        }
        catch(\Exception $e){
            return $e->getMessage()." on line ".$e->getLine()." in file ".$e->getFile();
        }
    }

    public  function  approve($id){
        try{
            $entry   =  $this->reservations->approveReservation($id);
            return redirect()->route('home')->with('data', sendHttpResponse('', "Reservation approved successfully", 200));
        }
        catch(\Exception $e){
            return $e->getMessage()." on line ".$e->getLine()." in file ".$e->getFile();
        }
    }

    public function decline($id){
        try{
            $entry   =  $this->reservations->declineReservation($id);
            return redirect()->route('home')->with('data', sendHttpResponse('', "Reservation declined successfully", 200));
        }
        catch(\Exception $e){
            return $e->getMessage()." on line ".$e->getLine()." in file ".$e->getFile();
        }
    }
}
