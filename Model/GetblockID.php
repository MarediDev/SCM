<?php

include_once "../DatabaseConnection/DBconnection.php";

class GetBlockID extends Databaseconnect
{
 protected function BlockID($userID)
 {
   $sql = "SELECT * FROM classblock WHERE user_id = ?;";
   $stmt = $this->connect()->prepare($sql);
   if ($stmt->execute(array($userID))==false)
    {
     header("Location: ../Interface/SubjectSelection.php?result=sqlInblockID");
    }else
    {
      if ($result = $stmt->fetch())
      {
        return $result;
      }else
      {
        header("Location: ../Interface/SubjectSelection.php?result=noresultinBlockID");
      }
    }

 }
}
