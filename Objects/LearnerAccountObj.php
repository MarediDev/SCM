<?php

include_once '../DatabaseConnection/DBconnection.php';
include_once '../Model/TeacherAccountCreation.php';
include_once '../Control/TeacherAccountCreating.php';
include_once '../Model/LearnerAccountCreation.php';
include_once '../Control/LearnerAccountCreating';

  if (!isset($_POST['submit']))
   {
     header("Location: ../index.php?signUp=UnclickBtn");

  }else
  {
    $firstName = $_POST['firstName'];
    $surname   = $_POST['surname'];
    $IDNumber  = $_POST['ID'];
    $gender    = $_POST['gender'];
    $Rank      = $_POST['Rank'];
    $password  = $_POST['password'];

    if ($Rank == "Teacher")
     {
       $regDate =   TeacherAccounts::$Date = date("Y-m-d") ;;
       $regTime =TeacherAccounts::$Time =date("h:i:s:a");;
       $status = TeacherAccounts::$status=0;
       $userObject =  new  TeacherAccounts($firstName,$surname, $regDate,$regTime,$IDNumber,$gender,$Rank,$status,$password);
       $userObject ->UserAccounts();
       exit();

     }else
     {
       $regDate =   LearnerAccountCreating::$Date = date("Y-m-d") ;;
       $regTime = LearnerAccountCreating::$Time =date("h:i:s:a");;
       $status = LearnerAccountCreating::$status=0;
       $userObject =  new  LearnerAccountCreating($firstName,$surname, $regDate,$regTime,$IDNumber,$gender,$Rank,$status,$password);
       $userObject ->UserAccounts();
       exit();

     }


  }
