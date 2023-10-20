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
    if (empty($firstName) || empty($surname) || empty($IDNumber) || empty($gender)|| empty($Rank)|| empty($password))
    {
      header("Location: ../Interface/LearnerAccountCreation.php?error=UserInput");
    }elseif (strlen($IDNumber) < 13)
     {
    header("Location: ../Interface/LearnerAccountCreation.php?error=less");
    }elseif(strlen($IDNumber)  > 13)
    {
      header("Location: ../Interface/LearnerAccountCreation.php?error=more");
    }elseif($Gender=="NonGender")
    {
        header("Location: ../Interface/LearnerAccountCreation.php?error=Unselected");
    }elseif($Rank == "NonRank")
    {
        header("Location: ../Interface/LearnerAccountCreation.php?error=Unselected");
    }

    elseif ($Rank == "Teacher")
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
