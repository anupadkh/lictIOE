<?php

namespace App\Http\Controllers;

use App\Halls;
use App\Reservations;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public  $request;
    public  $halls;
    public  $reservations;
    public  $user;

    /**
     * Create a new controller instance.
     *
     * @param Request $request
     * @param Halls $halls
     * @param Reservations $reservations
     */
    public function __construct(Request $request, Halls $halls, Reservations $reservations, User $user)
    {
        $this->request  =   $request;
        $this->halls    =   $halls;
        $this->reservations     =   $reservations;
        $this->user         =   $user;

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if(Auth::user()->is_admin == 1){
            $reservations   =   $this->reservations->getAllReservations();
        }
        else{
            $reservations   =   $this->reservations->getReservations(Auth::user()->id);
        }
        foreach ($reservations as $reservation){
            $user_details   =   $this->user->find($reservation->user_id);
            $reservation->name  =   $user_details->email;
        }
        return view('home')->with('reservations', $reservations);
    }
}
