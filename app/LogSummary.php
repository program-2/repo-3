<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use stdClass;

class LogSummary extends Model
{

      /**
       * The table associated with the model.
       *
       * @var string
       */
      protected $table = 'log_summary';

      //public $timestamps = false;

      protected $guard = [];

      public static function getSummary($phone)
      {
        $logSummary = LogSummary::where('phone',$phone)->get();
        $summary = new stdClass;
        //return $logSummary[0]['id'];
        if(! isset( $logSummary[0]['id'])) {
          $summary->id = null;
          $summary->phone = null;
        } else {
          $summary->id = $logSummary[0]['id'];
          $summary->phone = $phone;
        }
        return $summary;
      }
}
