<?php

include_once '../DatabaseConnection/DBconnection.php';
include_once '../Model/TeacherSelectedSchools.php';
include_once '../Control/TeacherSelectedSchool.php';
  if (!isset($_GET['submit']))
  {

   header("Location:../Interface/schoolSelection.php");
  }else
  {
    $schoolName = $_GET['schools'];
    $district = $_GET['district'];
    $province = $_GET['provinceName'];
    $userID = $_GET['UserID'];
    $CircutSelection = $_GET['CircutSelection'];

    $selectedSchoolObj =  new  TeacherSelectedschools($schoolName,$userID,$province,$district,$CircutSelection);
    $selectedSchoolObj->TeacherSchools();
  }
 ?>
