<?php

include_once "../DatabaseConnection/DBconnection.php";

class SelectSchool extends Databaseconnect
{
  protected function getschoolNameMankweng()
  {
    $sql = "SELECT Mankweng_Circut FROM circutmankweng;";
    $stmt = $this->connect()->query($sql);
    while ($result =  $stmt->fetchAll())
     {
      return $result;
    }
  }
  protected function getschoolNameKgakatlou()
  {
    $sql = "SELECT Kgakatlou FROM kgakotloucircuit;";
    $stmt = $this->connect()->query($sql);
    while ($result =  $stmt->fetchAll())
     {
      return $result;
    }
  }
}
