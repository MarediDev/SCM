<?php

 include_once "../Model/ParentAccountCreation.php";

class ParentAccountCreations extends ParentAccountCreation
{
  private $firstName ;
  private $surname ;
  private $phoneNumber;
  private $learnerID;

  public function __construct($firstName,$surname,$phoneNumber,$learnerID)
  {
    $this->firstName  = $firstName;
    $this->surname  = $surname ;
    $this->phoneNumber = $phoneNumber;
    $this->learnerID = $learnerID;

  }

  public function ParentAccounts()
  {
      $this->ParentAccount($this->firstName,$this->surname,$this->phoneNumber,$this->learnerID);
  }

}
