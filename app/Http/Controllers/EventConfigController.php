<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventServices\ConfigHandler;
use App\EventServices\Tools\Data;
use App\Http\Resources\ResponseResource;


class EventConfigController extends Controller
{
    public function __construct()
    {
      //
    }
    /*public function store(ConfigHandler $eventConfig, Request $request, Data $data) {
      $eventConfig->configEvent($data);

    }*/

    public function store(Request $request) {
      $event = new Event;
      $event->name = $request->input('name');
      $event->score = $request->input('score');
      $event->description = $request->input('description');
      $check = $event->save();
      return (new ResponseResource(Event::all()));
    }
}
