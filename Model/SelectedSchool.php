<?php

include_once "../DatabaseConnection/DBconnection.php";

class SelectedSchool extends Databaseconnect
{
  protected function Selected($school,$userID,$province,$district,$circut,$parentInf)
  {
    $sql = "INSERT INTO school(schoolName,userID) VALUES(?,?);";
    $stmt = $this->connect()->prepare($sql);
    if (!$stmt->execute(array($school,$userID)))
     {
      header("Location: ../Interface/schoolSelection.php?schoolSelection=sqlError");
     }else
     {
      header("Location: ../Interface/SelectGrade.php?school=$school&userID=$userID&province=$province&district=$district&circut=$circut&parentInf=$parentInf");
     }
  }
}
