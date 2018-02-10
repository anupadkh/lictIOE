<?php

namespace App\Http\Controllers;

use App\Halls;
use App\Reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $user_id    =   Auth::user()->id;
            $entry   =  $this->reservations->createReservation($user_id, $this->request->all());
            return $entry;
        }
        catch(\Exception $e){

        }
    }
}
