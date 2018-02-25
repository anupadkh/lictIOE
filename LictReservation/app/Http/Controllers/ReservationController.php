<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //

    /*
		Return view page for reservation section
    */
		public function index(){
			return view('reserve');
		}
}
