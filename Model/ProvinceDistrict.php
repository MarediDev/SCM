<?php

include_once "../DatabaseConnection/DBconnection.php";

class District extends Databaseconnect
{
  protected function Limpopo()
  {
    $sql = "SELECT Limpopo FROM provinces; ";
    $stmt =$this->connect()->query($sql);
    if ($result = $stmt->fetchall())
     {
       if (count($result) > 0)
       {
         return $result;
       }
     }
  }

  protected function Mpumalanga()
  {
    $sql = "SELECT Mpumalanga FROM provinces; ";
    $stmt =$this->connect()->query($sql);
    if ($result = $stmt->fetchall())
     {
       if (count($result) > 0)
       {
         return $result;
       }
     }
  }

}
