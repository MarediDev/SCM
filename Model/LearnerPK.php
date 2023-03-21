<?php

include_once "../DatabaseConnection/DBconnection.php";

class LearnerID extends Databaseconnect
{
  protected function GetLearnerPK($IDno)
  {
    $sql = "SELECT * FROM users WHERE IDno = $IDno;";
    $stmt =$this->connect()->query($sql);
    if ($result= $stmt->Fetch())
    {
        if (count($result) > 0)
        {
           return $result;
        }else
        {
          header("Location: ../Interface/parentInformation.php?result=Noresult");
          exit();
        }
    }else
    {
      header("Location: ../Interface/parentInformation.php?result=sqlError");
      exit();
    }

  }
}
