<?php

include_once '../DatabaseConnection/DBconnection.php';
include_once '../Model/SelectedSchool.php';
include_once '../Control/SelectedSchools.php';
  if (!isset($_GET['submit']))
  {

   header("Location:../Interface/schoolSelection.php");
  }else
  {
    $schoolName = $_GET['schools'];
    $district = $_GET['district'];
    $province = $_GET['provinceName'];
    $userID = $_GET['UserID'];
    $parentInf = $_GET['ParentID'];
    $CircutSelection = $_GET['CircutSelection'];

    $selectedSchoolObj =  new Selectedschools($schoolName,$userID,$province,$district,$CircutSelection,$parentInf);
    $selectedSchoolObj->selectedSkol();
  }
 ?>
