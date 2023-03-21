<?php

 include_once "../Model/SelectBlock.php";

class GradeBlocks  extends GradeBlock
{

private   $school;
private   $schoolID;
private   $userID ;
private   $province;
private   $district;
private   $circut;
private   $BlockName;
private   $GradeID;
private   $parentID;
private   $SelectGrade;

public function __construct($school,$schoolID,$userID,$province,$district,$circut,$BlockName,$GradeID,$parentInf,$SelectGrade)
{
  $this->school = $school;
  $this->schoolID = $schoolID;
  $this->userID = $userID;
  $this->province = $province;
  $this->district = $district;
  $this->circut =$circut;
  $this->BlockName =$BlockName;
  $this->GradeID =$GradeID;
  $this->parentInf =$parentInf;
  $this->SelectGrade=$SelectGrade;
}
public function GradeInsert()
{

  $this->GradBlock($this->BlockName,$this->userID,$this->GradeID,$this->schoolID,$this->school,$this->province,$this->district,$this->circut,$this->parentInf,$this->SelectGrade);
}
}
