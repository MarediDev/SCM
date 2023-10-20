<?php

include_once "../DatabaseConnection/DBconnection.php";

class TeacherID extends Databaseconnect
{
  protected function teachersID($ID)
  {
    $sql = "SELECT * FROM users WHERE  IDno= $ID ;";
    $stmt =$this->connect()->query($sql);
    if ($result = $stmt->fetch())
    {
     return $result;
   }else
   {
     echo "nothing";
   }
  }
}
