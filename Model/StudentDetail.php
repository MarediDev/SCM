<?php

include_once "../DatabaseConnection/DBconnection.php";

class StudentInf extends Databaseconnect
{
   protected function LowGradeLearner($province,$district,$circut,$school,$grade,$blockname,$userID ,$parentID,$gradeID,$blockID,$schoolID)
   {
     $sql = "INSERT INTO student(province,district,circut,SchoolName,Grade,class,userID,Parent_ID,Grade_ID,class_ID,school_ID) VALUES(?,?,?,?,?,?,?,?,?,?,?);";
     $stmt = $this->connect()->prepare($sql);
     if ($stmt->execute(Array($province,$district,$circut,$school,$grade,$blockname,$userID ,$parentID,$gradeID,$blockID,$schoolID)) == false)
      {
       echo "SQL ERROR";
      }else
      {
        header("Location: ../index.php?result=regSuccess");
      }
   }
}
