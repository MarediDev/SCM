<?php

include_once "../DatabaseConnection/DBconnection.php";

class SubjChoice extends Databaseconnect
{
  Protected function subject8n9($subject1,$subject2,$subject3,$subject4,$subject5,$subject6,$subject7,$blockID,$userID,$selectedGrade,$blockname,$gradeID,$schoolID,$school,$province,$district,$circut,$parentID)
  {
    $sql = "INSERT INTO subject8n9(Subject1,Subject2,Subject3,Subject4,Subject5,Subject6,Subject7,classID,GradeID,UserID) values(?,?,?,?,?,?,?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    if ($stmt->execute(array($subject1,$subject2,$subject3,$subject4,$subject5,$subject6,$subject7,$blockID,$gradeID,$userID))==false)
    {
      header("Location: ../Interface/SubjectSelection.php?result=sqlError");
    }else
     {
     header("Location:../Objects/StudentObj.php?province=$province&district=$district&circut=$circut&school=$school&grade=$selectedGrade&blockname=$blockname&userID=$userID&schoolID=$schoolID&gradeID=$gradeID&blockID=$blockID&parentID=$parentID&student=");
     }
  }
}
