<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\DTO\Data;
use App\EventServices\Tools\Data;

class Customer extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

    public $timestamps = false;

    protected $fillable = ['phone_number','first_name','last_name','birthday'];

    //public static $score;


    /*public static function firstOrCreates($phone, $first_name, $last_name, $birthday)
    {
      $customer = self::firstOrCreate(
        ['phone_number' => $phone,
        'first_name' => $first_name,
        'last_name'=> $last_name,
        'birthday' => $birthday ]

        );

       return $customer;
    }*/

}
