<?php

include_once "../DatabaseConnection/DBconnection.php";

class TeacherClass extends Databaseconnect

{
  protected function TeacherClas($A,$B,$C,$D,$E,$school,$userID,$province,$district,$circut,$GradeChoice )
  {
    $sql = "INSERT INTO teacherblock(A,B,C,D,E) VALUES(?,?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    if ($stmt->execute(array($A,$B,$C,$D,$E)))
    {
      header("Location: ../Interface/TeacherSubject.php?school=$school&userID=$userID&province=$province&district=$district&circut=$circut&GradeChoice=$GradeChoice ");
    }

  }
}
