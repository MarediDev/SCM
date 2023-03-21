
<?php

include_once '../DatabaseConnection/DBconnection.php';
include_once '../Model/gradeID.php';
include_once '../Control/GradeIDs.php';
include_once '../Model/SelectBlock.php';
include_once '../Control/SelectBlocks.php';

if (!isset($_GET['submit']))
 {

 }
 else
  {
    $GradeObj = new GradID();
    $blockName = $_GET['BlockName'];
    $SelectedGrade = $_GET['GradeName'];
    $userID = $_GET['userID'];
    $schoolID = $_GET['schoolID'];
    $school = $_GET['school'];
    $province =$_GET['province'];
    $district =$_GET['district'];
    $circut =$_GET['circut'];
    $parentID = $_GET['parentID'];
    $resultObj  = $GradeObj -> GetGradeIDs($userID);
    $GradeResultID  = $resultObj['GradeID'];
    $BlockObj = new GradeBlocks($school,$schoolID,$userID,$province,$district,$circut,$blockName,$GradeResultID,$parentID ,$SelectedGrade);
    $BlockObj->GradeInsert();
 }
