<?php

 include_once "../Model/SelectedSchool.php";

class Selectedschools extends SelectedSchool
{

   Private $school;
   Private $userID;
   Private $province;
   Private $district;
   Private $circut;
   Private $parentInf;

   public function __construct($school,$userID,$province,$district,$circut,$parentInf)
   {
     $this->school = $school;
     $this->userID = $userID;
     $this->province = $province;
     $this->district = $district;
     $this->circut =$circut;
     $this->parentInf =$parentInf;

   }
   public function selectedSkol()
   {
     $this->Selected($this->school,$this->userID, $this->province,$this->district,$this->circut, $this->parentInf);
   }

}
