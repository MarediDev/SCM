<?php

include_once "../DatabaseConnection/DBconnection.php";

class SubjChoiceStream extends Databaseconnect
{
  Protected function subject10to12($subject1,$subject2,$subject3,$subject4,$subject5,$subject6,$subject7,$subject8,$subject9,$subject10,$subject11,$subject12,$subject13,$subject14,$subject15,$blockID,$userID,$selectedGrade,$blockname,$gradeID,$schoolID,$school,$province,$district,$circut,$parentID)
  {
    $sql = "INSERT INTO subject10to12(subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,subject10,subject11,subject12,subject13,subject14,subject15,Class_ID,Grade_ID,User_ID) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    if ($stmt->execute(array($subject1,$subject2,$subject3,$subject4,$subject5,$subject6,$subject7,$subject8,$subject9,$subject10,$subject11,$subject12,$subject13,$subject14,$subject15,$blockID,$gradeID,$userID))==false)
    {
      header("Location: ../Interface/SubjectSelection.php?result=sqlError");
    }else
     {
     header("Location:../Objects/StudentObj.php?province=$province&district=$district&circut=$circut&school=$school&grade=$selectedGrade&blockname=$blockname&userID=$userID&schoolID=$schoolID&gradeID=$gradeID&blockID=$blockID&parentID=$parentID&student=");
     }
  }
}
