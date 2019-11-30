<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Event;
use App\EventServices\Tools\Data;
use App\Http\Resources\Customer as CustomerResource;
use App\EventServices\EventHandler;
use App\Traits\ValidateEvent;


class EventController extends Controller
{
  use ValidateEvent;

      public function __construct(Request $request)
      {
        $this->verify($request);
      }
      public function store(EventHandler $eventHandler, Request $request, Data $data) {

        $data->setPhone($request->input('phone'));
        $data->setEventID($request->input('event_id', 1));
        $data-> setFirstName($request->input('first_name'));
        $data-> setLastName($request->input('last_name'));
        $data-> setBirthday($request->input('birthday'));

        return $eventHandler->processEvent($data); 
      }

}
