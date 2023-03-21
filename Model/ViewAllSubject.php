<?php

include_once "../DatabaseConnection/DBconnection.php";

class ViewSubject extends Databaseconnect
{
  protected function Allsubject($userID)
  {
   $sql = "SELECT * FROM subject10to12 WHERE User_ID =$userID ;";
   $stmt = $this->connect()->query($sql);
    if ($result = $stmt->fetch())
     {
       return $result;
    }else
    {
      header("Location: ../Interface/ViewAllModule.php?result=Nosubject");
    }
  }
}
