<?php
include_once "../Model/ParentID.php";

class ParentsID extends ParentID
{
  public function GetParentsID($phoneNumber)
  {
    return $this-> GetParentID($phoneNumber);
  }

}
