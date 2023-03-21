<?php

 include_once "../Model/StudentDetail.php";

class StudentInformation extends  StudentInf
{
private $province;
private $district;
private $circut;
private $school;
private $grade;
private $blockname;
private $userID;
private $parentID;
private $gradeID;
private $blockID;
private $schoolID;

public function __construct($province,$district,$circut,$school,$grade,$blockname,$userID,$parentID,$gradeID,$blockID,$schoolID)
{
  $this->province = $province ;
  $this->district = $district ;
  $this->circut = $circut ;
  $this->school = $school ;
  $this->grade = $grade;
  $this->blockname = $blockname ;
  $this->userID = $userID ;
  $this->parentID = $parentID ;
  $this->gradeID = $gradeID;
  $this->blockID = $blockID ;
  $this->schoolID = $schoolID;
}

public function LowGradeLearners()
{
  $this->LowGradeLearner($this->province ,$this->district ,$this->circut,$this->school,$this->grade,$this->blockname,$this->userID,$this->parentID,$this->gradeID,$this->blockID,$this->schoolID);
}

}
