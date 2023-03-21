<?php

 include_once "../Model/GetSchoolID.php";

class GetSkoolIDs  extends GetSkoolID
{
  public function GetSkoolIDs($schoolID)
  {
    return $this-> GetSchoolID($schoolID);
  }
}
