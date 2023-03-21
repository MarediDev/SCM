<?php

include_once '../DatabaseConnection/DBconnection.php';
include_once '../Model/StudentDetail.php';
include_once '../Control/StudentDetails.php';

 if (isset($_GET['student']))
  {
    $province =$_GET['province'];
    $district =$_GET['district'];
    $circut =$_GET['circut'];
    $school =$_GET['school'];
    $grade =$_GET['grade'];
    $blockname =$_GET['blockname'];
    $userID =$_GET['userID'];
    $parentID =$_GET['parentID'];
    $gradeID =$_GET['gradeID'];
    $blockID =$_GET['blockID'];
    $schoolID =$_GET['schoolID'];


   $studentObj = new StudentInformation($province,$district,$circut,$school,$grade,$blockname,$userID,$parentID,$gradeID,$blockID,$schoolID);
    $studentObj ->LowGradeLearners();
 }
