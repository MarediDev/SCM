 <?php

include_once "../DatabaseConnection/DBconnection.php";

class Grade extends Databaseconnect
{


  protected function GradSelections($className,$User_ID,$school_ID,$school,$province,$district,$circut,$parentID)
  {
    $Sql = "INSERT INTO grade(className,User_ID,school_ID) values(?,?,?);";
    $stmt = $this->connect()->prepare($Sql);
    if ($stmt->execute(array($className,$User_ID,$school_ID)) == false)
     {
      header("Location: ../Interface/selectGrade.php?error=sqlError");
     }else
     {
       header("Location: ../Interface/SelectClass.php?className=$className&userID=$User_ID&schoolID=$school_ID&school=$school&province=$province&district=$district&circut=$circut&parentID=$parentID");
     }
  }
}
