<?php

include_once '../DatabaseConnection/DBconnection.php';
include_once '../Model/GetSchoolID.php';
include_once '../Control/GetschoolIDs.php';
include_once '../Model/GradeSelection.php';
include_once '../Control/GradeSelections.php';

if (!isset($_GET['submit']))
 {
  echo "fuck";
 }else
 {
   $schoolIDobj  = new GetSkoolIDs();
   $gradeSelected = $_GET['SelectGrade'];
   $school  = $_GET['school'];
   $userID = $_GET['userID'];
   $schoolIDs = $schoolIDobj->GetSkoolIDs($school);
   $schoolID = $schoolIDs['school_ID'] ;
   $province = $_GET['province'];
   $district = $_GET['district'];
   $circut = $_GET['circut'];
   $parentID = $_GET['parentID'];


   $selectGradeObj = new Grades($gradeSelected,$userID, $schoolID, $school,$province,$district,$circut,$parentID);
   $selectGradeObj ->GradeSelect();
 }
