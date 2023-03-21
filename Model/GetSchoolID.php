<?php

include_once "../DatabaseConnection/DBconnection.php";

class GetSkoolID extends Databaseconnect
{

  protected function GetSchoolID($schoolID)
  {
    $sql = "SELECT * from school WHERE schoolName = ? ;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute(array($schoolID));
    if ($result = $stmt->fetch())
    {
      return $result;
    }else
    {
        header("Location: ../Interface/schoolSelection.php?error=NoSchool");
    }

  }
}
