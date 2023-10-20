<?php

 include_once "../Model/SelectedSchool.php";

class TeacherSelectedschools extends TeacherSelectedSchool
{

   Private $school;
   Private $userID;
   Private $province;
   Private $district;
   Private $circut;


   public function __construct($school,$userID,$province,$district,$circut)
   {
     $this->school = $school;
     $this->userID = $userID;
     $this->province = $province;
     $this->district = $district;
     $this->circut =$circut;


   }

   public function TeacherSchools()
   {
     $this->TeacherSchool($this->school,$this->userID, $this->province,$this->district,$this->circut);
   }

}
