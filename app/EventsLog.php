<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class EventsLog extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events_log';

    //public $timestamps = false;

    protected $fillable = ['phone','event_id', 'score','event_name'];

    /*public static function firstOrCreates($phone, $event_name, $event_id, $score)
    {
      $log = self::firstOrCreate(
        ['phone' => $phone,
        'event_name' => $event_name,
        'event_id'=> $event_id,
        'score' => $score ]
        );

       return $log;
    }*/
  }
