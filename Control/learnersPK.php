<?php

include_once "../Model/LearnerPK.php";

class LearnersPK extends LearnerID
{
  private $IDno;


  public function __construct($IDno)
  {
    $this->IDno = $IDno;
  }

  public function GetLearnersPK()
  {
   return $this->GetLearnerPK($this->IDno);
  }

}
