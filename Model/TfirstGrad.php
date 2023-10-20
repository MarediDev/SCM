<?php

class Firstgrad extends Databaseconnect
 {
  protected function First($grade8,$school,$userID,$province,$district,$circut )

  {
    $sql = 'INSERT INTO teachergrades(GradeName) VALUES(?);';
    $stmt = $this->connect()->prepare($sql);
    if ($stmt->execute(array($grade8)))
    {
      header("Location: ../Interface/TeacherClass.php?gradeChoice=$grade8&school=$school&userID=$userID&province=$province&district=$district&circut=$circut");
    }else
    {
      echo "sql Error";
    }
  }
 }
