<?php

namespace App\EventServices\Tools;

class Data
{

  private $phone;

  public $event_id;

  private $first_name;

  private $last_name;

  private $birthday;

  private $eventName;

  private $description;

  private $score;

  public function getPhone()
  {
    return $this->phone;
  }
  public function setPhone($phone)
  {
    $this->phone = $phone;
  }
  public function setEventID($event_id)
  {
    $this->event_id = $event_id;
  }
  public function getEventID()
  {
    return $this->event_id;
  }
  public function getFirstName()
  {
    return $this->first_name;
  }
  public function setFirstName($first_name)
  {
    $this->first_name = $first_name;
  }
  public function getLastName()
  {
    return $this->last_name;
  }
  public function setLastName($last_name)
  {
    $this->last_name = $last_name;
  }
  public function getBirthday()
  {
    return $this->birthday;
  }
  public function setBirthday($birthday)
  {
    $this->birthday = $birthday;
  }
//for event configs:
  public function setEventName($eventName)
  {
    $this->eventName = $eventName;
  }
  public function getEventName()
  {
    return $this->eventName;
  }
  public function getScoreForEvent()
  {
    return $this->score;
  }
  public function setScoreForEvent($score)
  {
    $this->birthday = $score;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDescription($description)
  {
     $this->description = $description;
  }

}
