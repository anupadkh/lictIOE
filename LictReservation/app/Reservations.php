<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'hall_id', 'user_id', 'date', 'from','to', 'status'
    ];

    /**
     * Create reservation
     * @param $user_id
     * @param $options
     * @return static
     */
    public  function createReservation($user_id, $options){
        $entry  =   new static();

        $entry->user_id     =   $user_id;
        $entry->hall_id     =   $options['hall'];
        $entry->date     =   $options['date'];
        $entry->from     =   $options['from'];
        $entry->to     =   $options['to'];

        $entry->save();
        return $entry;
    }

    /**
     *
     * Return list of reservations
     *
     * @param $user_id
     * @return mixed
     */
    public  function getReservations($user_id){
        return $this->where('user_id', $user_id)->orderBy('created_at', 'DESC')->get();
    }

    /**
     * Get all reservations for user
     *
     * @return mixed
     * */
    public function getAllReservations(){
        return $this->orderBy('created_at', 'DESC')->get();
    }

    /**
     * Approve the reservation
     *
     * @param $id
     * @return mixed
     * */
    public  function approveReservation($id){
        $entry   =  $this->where('id', $id)->first();
        $entry->status = 1;
        $entry->save();
        return $entry;
    }

    /**
     * Decline the reservation
     *
     * @param $id
     * @return mixed
     * */
    public  function declineReservation($id){
        $entry   =  $this->where('id', $id)->first();
        $entry->status = 2;
        $entry->save();
        return $entry;
    }

}
