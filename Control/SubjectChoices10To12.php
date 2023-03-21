<?php
include_once "../Model/SubjectChoice10To12.php";

class SubjChoiceStreams extends SubjChoiceStream
{

 private $subject1;
 private $subject2;
 private $subject3;
 private $subject4;
 private $subject5;
 private $subject6;
 private $subject7;
 private $subject8;
 private $subject9;
 private $subject10;
 private $subject11;
 private $subject12;
 private $subject13;
 private $subject14;
 private $subject15;
 private$blockname;
 private $userID ;
 private $selectedGrade;
 private $blockID;
 private $gradeID;
 private $schoolID;
 private $school;
 private $province;
 private $district;
 private $circut;
 private $parentID;

 public function __construct($subject1,$subject2,$subject3,$subject4,$subject5,$subject6,$subject7,$subject8,$subject9,$subject10,$subject11,$subject12,$subject13,$subject14,$subject15,$blockID,$userID,$selectedGrade,$blockname,$gradeID,$schoolID,$school,$province,$district,$circut,$parentID)
 {
   $this->subject1 = $subject1;
   $this->subject2 = $subject2;
   $this->subject3 = $subject3;
   $this->subject4 = $subject4;
   $this->subject5 = $subject5;
   $this->subject6  = $subject6;
   $this->subject7  = $subject7;
   $this->subject8  = $subject8;
   $this->subject9  = $subject9;
   $this->subject10  = $subject10;
   $this->subject11  = $subject11;
   $this->subject12  = $subject12;
   $this->subject13  = $subject13;
   $this->subject14  = $subject14;
   $this->subject15  = $subject15;
   $this->blockID =$blockID;
   $this->userID =   $userID;
   $this->selectedGrade= $selectedGrade;
   $this->blockname =  $blockname;
   $this->gradeID =$gradeID;
   $this->schoolID =$schoolID;
   $this->school =$school;
   $this->province =$province;
   $this->district =$district;
   $this->circut =$circut;
   $this->parentID =$parentID;

 }

 public function SelectedSubjStream()
 {
   $this-> subject10to12($this->subject1,$this->subject2,$this->subject3,$this->subject4,$this->subject5,$this->subject6, $this->subject7,$this->subject8,$this->subject9,$this->subject10,$this->subject11,$this->subject12,$this->subject13,$this->subject14,$this->subject15,$this->blockID,$this->userID,$this->selectedGrade,
   $this->blockname, $this->gradeID,$this->schoolID,$this->school,$this->province, $this->district ,$this->circut, $this->parentID);
 }

}
