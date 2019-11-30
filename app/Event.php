<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\DTO\Data;
use App\EventServices\Tools\Data;

class Event extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';

    public $timestamps = false;

    protected $fillable = ['phone_number','event_id', 'score'];

    public static function createOrUpdate($phone,$event_name, $event_id,$score)
    {
      $customer = self::updateOrCreate(
        ['phone_number' => $phone,
        'first_name' => $event_name,
        'last_name'=> $event_id,
        'birthday' => $score ]
        );

       return $customer;
    }

    public static function getEvent($data)
    {
      $A = $data->getEventID(); // error ........................
      $event = self::select('*')->where('id', $A) ->get();
      if(! isset($event[0])) {
        $event->score = null;
        $event->name = null;
        $event->id = null;

      } else {
        $event->score = $event[0]['score'];
        $event->name = $event[0]['name'];
        $event->id = $event[0]['id'];
      }
      return $event;
    }
    public static function getScore($data)
    {
      $event = self::select('*')->where('id',$data->getEventId())->get();
      $event_score = $event[0]['score'];
      return $event_score;
    }
    public static function getDefaultEvent()
    {
      //$internalData = $data;
    //  $internalData->setEventId(1);
      $event = self::select('*')->where('id',1)->get();
      return self::getEvent($event); //error ........................
    }
}
