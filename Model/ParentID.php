<?php
include_once "../DatabaseConnection/DBconnection.php";

class parentID extends Databaseconnect
{
  public function GetParentID($phoneNumber)
  {
    $sql = "SELECT * FROM parentinformation WHERE PhoneNo = ?;";
    $stmt = $this->connect()->prepare($sql);
    if ($stmt->execute(Array($phoneNumber)) == false)
    {
      header("Location: ../Interface/parentInfomation.php?parentID=sqlError");
    }else
    {
      if ($result = $stmt->fetch())
       {
        return $result;
        exit();
      }else
      {
        header("Location: ../Interface/parentInfomation.php?parentID=Noresult");
      }
    }
  }
}
