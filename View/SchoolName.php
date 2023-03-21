<?php

include_once "../Model/GetSchoolName.php";

class GetsName extends GetName
{
  public function GetsSchool($userID)
  {
    return $this->GetSchool($userID);
  }

}
