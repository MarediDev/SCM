<?php

include_once "../DatabaseConnection/DBconnection.php";

class TeacherAccount extends Databaseconnect
{
  protected function userAccount($firstName,$Surname,$Dates,$time,$IDno,$Gender,$Rank,$status,$Password)
  {
    $sql = "INSERT INTO users(firstName,Surname,Reg_Date,Reg_Time,IDno,Gender,Ranks,status,Passwords)Values(?,?,?,?,?,?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    $hashed_password = password_hash($Password, PASSWORD_DEFAULT);
    if ($stmt->execute(Array($firstName,$Surname,$Dates,$time,$IDno,$Gender,$Rank,$status,$hashed_password)) == false)
    {
     header("Location: ../index.php?signUp=RegUnsuccess");
    }else
    {
      header("Location: ../index.php?signUp=success");
    }
  }
}
