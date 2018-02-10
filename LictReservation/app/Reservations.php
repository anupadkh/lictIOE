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
        $entry->hall_id     =   $options['hall_id'];
        $entry->date     =   $options['date'];
        $entry->from     =   $options['from'];
        $entry->to     =   $options['to'];

        $entry->save();
        return $entry;
    }

}
