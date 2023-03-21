<?php

 include_once "../Model/GradeID.php";

class GradID  extends  GradeID
{
  public function GetGradeIDs($UserID)
  {
    return $this-> GradID($UserID);
  }

}
