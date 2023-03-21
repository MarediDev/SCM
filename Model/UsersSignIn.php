<?php

include_once "../DatabaseConnection/DBconnection.php";

class UsersSignIn extends Databaseconnect
{
  protected function SignIn($IDno,$password)
  {
    $sql = "SELECT * FROM users WHERE IDno=?";
    $stmt=$this->connect()->prepare($sql);
     $result = $stmt->execute(array($IDno));
         $result =   $stmt->fetchAll();
         if($stmt->rowCount()> 0)
         {
             $getHarshedPassword = $result[0]['Passwords'];
             $verifyPassword = password_verify($password,$getHarshedPassword);
             if (!$verifyPassword)
              {
               header("Location: ../index.php?signIn=pwdNotMatch");
             }else
             {
               Session_start();
               $_SESSION['user_id'] = $result['0']['user_id'];
               $_SESSION['IDnumber'] = $result['0']['IDno'];
               $_SESSION['Rank'] = $result['0']['Ranks'];
               header("Location: ../Interface/DirectHome.php?signIn=success");
             }
         }else
         {
           header("Location: ../index.php?signIn=UserNotExist");
         }
  }
}
