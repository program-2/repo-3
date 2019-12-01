<?php
namespace App\EventServices;

use Illuminate\Http\Request;
use App\Customer as CustomerModel;
use App\Event as EventModel;
use App\EventsLog as EventsLogModel;
use App\EventServices\Tools\Data;
use App\Http\Resources\Customer as CustomerResource;
use App\LogSummary as LogSummaryModel;
use App\Http\Resources\ResponseResource;



class EventHandler

{


      public function processEvent($data)
      {
        $event = $this->getEvent($data);
        $customer = $this->createCustomer($data);

        $log = $this->createLog($data, $event);

        $summary = $this->getSummary($data);

        return $Response = $this->PrepareResponse($summary, $log, $customer);
      }

      public function getEvent($data)
      {
        return EventModel::getEvent($data);

      }

      public function createCustomer($data)
      {
        return CustomerModel::firstOrCreate(
          ['phone_number' => $data->getPhone()],
          ['first_name' => $data->getFirstName(),
          'last_name'=> $data->getLastName(),
          'birthday' => $data->getBirthday() ]
        );
      }

      public function createLog($data, $event)
      {
        return EventsLogModel::Create(
          ['phone' => $data->getPhone(),
          'event_name' => $event->name,
          'event_id'=> $data->getEventID(),
          'score' => $event->score ]
        );
      }
      public function getSummary($data)
      {
        $summary = LogSummaryModel::getSummary($data->getPhone());
        return $summary;
      }

      public function PrepareResponse($summary, $log, $customer)
      {


      $Response = $this->prepare($log);

            return  $Response ->additional(['meta' => [
                    'customers_operations_count' => $summary->id,
                    'gift' => $this->gift($summary),
                    'last_operation_data'=>['log_id'=>$log->id,
                                            'event_name'=>$log->event_name,
                                            'event_id'=>$log->event_id,
                                            'customer_name'=>$customer->first_name.
                                               '-'.$customer->last_name,
                                            'customer_id'=>$customer->id]
                ]]);
      }

      public function prepare($log)
      {
        return (new ResponseResource(EventsLogModel::find($log->id)));
      }

      #for each 10 operations.
      public function gift($summary)
      {
        if($summary->id%10 == 0) {return true;} else {return false;}
      }

}
