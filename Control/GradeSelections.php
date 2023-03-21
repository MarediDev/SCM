<?php

 include_once "../Model/GradeSelection.php";

class Grades  extends Grade
{

  private $className;
  private $User_ID;
  private $school_ID;
  private $school;
  private $province;
  private $district;
  private $circut;
  private $parentID;

  public function  __construct($className,$User_ID,$school_ID, $school,$province,$district,$circut,$parentID)
  {
    $this->className =$className;
    $this->User_ID =$User_ID;
    $this->school_ID =$school_ID;
    $this->school =$school;
    $this->province =$province;
    $this->district =$district;
    $this->circut =$circut;
    $this->parentID =$parentID;
  }

  public function GradeSelect()
  {
    return  $this->GradSelections($this->className ,$this->User_ID,$this->school_ID,$this->school ,$this->province ,$this->district,$this->circut,$this->parentID);
  }


}
