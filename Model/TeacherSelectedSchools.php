<?php

include_once "../DatabaseConnection/DBconnection.php";

class TeacherSelectedSchool extends Databaseconnect
{

  protected function TeacherSchool($school,$userID,$province,$district,$circut)
  {
    $sql = "INSERT INTO teachersschool(schoolName,User_ID) VALUES(?,?);";
    $stmt = $this->connect()->prepare($sql);
    if (!$stmt->execute(array($school,$userID)))
     {
      header("Location: ../Interface/TeacherSchoolSelection.php?schoolSelection=sqlError");
     }else
     {
      header("Location: ../Interface/TeacherGrade.php?school=$school&userID=$userID&province=$province&district=$district&circut=$circut");
     }
  }
}
