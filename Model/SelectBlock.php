<?php

include_once "../DatabaseConnection/DBconnection.php";

class GradeBlock extends Databaseconnect
{
  protected function GradBlock($BlockName,$User_ID,$GradeID,$school_ID,$school,$province,$district,$circut,$parentID,$SelectedGrade)
  {
    $Sql = "INSERT INTO classBlock(blockName,user_id,Grade_ID,School_ID) values(?,?,?,?);";
    $stmt = $this->connect()->prepare($Sql);
    if ($stmt->execute(array($BlockName,$User_ID,$GradeID,$school_ID))== false)
     {
      header("Location: ../Interface/selectGrade.php?error=sqlError");
     }else
     {
       header("Location: ../Interface/SubjectSelection.php?className=$BlockName&userID=$User_ID&&selectedGrade=$SelectedGrade&gradeID=$GradeID&schoolID=$school_ID&school=$school&province=$province&district=$district&circut=$circut&parentID=$parentID");
     }
  }
}
