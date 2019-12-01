<?php

namespace App\EventServices\Tools;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

trait ValidateEvent
{
  public  function verify($request)
  {

    $validatedData = $request->validate([
      'phone' => 'required|string|size:11',
      'event_id' => 'integer',
      'first_name' => 'string',
      'last_name' => 'string',
    ]);
  }
}
