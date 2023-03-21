<?php

include_once "../DatabaseConnection/DBconnection.php";

class ParentAccountCreation extends Databaseconnect
{

  protected function ParentAccount($firstName,$surname,$PhoneNo,$UserID)
  {
    $sql = "INSERT INTO parentinformation(firstName,surname,PhoneNo,User_ID) VALUES(?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);

    if ($stmt->execute(Array($firstName,$surname,$PhoneNo,$UserID)) == false)
    {
      header("Location: ../Interface/parentInfomation.php?signup=sqlError");
    }else
    {

        header("Location: ../Interface/Province.php?signup=Parentsuccess&userID=$UserID&Parentphone=$PhoneNo");
    }
  }
}
