<?php

include_once "../DatabaseConnection/DBconnection.php";

class GetName extends Databaseconnect
{
  protected function GetSchool($userID)
  {
    $Sql = "SELECT * FROM school WHERE userID = $userID;";
    $stmt = $this->connect()->query($Sql);
      if ($result = $stmt->fetch())
       {
        return $result;
       }
       else
       {
         header("Location: ../Interface/LearnerHome.php?result=NoSchoolAvailable");
       }
    }


}
