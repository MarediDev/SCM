<?php

include_once '../DatabaseConnection/DBconnection.php';
include_once '../Model/TfirstGrad.php';
include_once '../Control/TfirstGrade.php';
$school = $_GET['school'];
$userID = $_GET['userID'];
$province = $_GET['province'];
$district = $_GET['district'];
$circut = $_GET['circut'];

if (isset($_GET['submit']))
 {
  // code...

if (isset($_GET['grade8']))
 {

   $grade8 = $_GET['grade8'];
   $Firstgrade = new Firstgrade();
   $Firstgrade -> FirstGrade($grade8,$school,$userID,$province,$district,$circut);

 }elseif(isset($_GET['grade9']))
 {
   $grade9 = $_GET['grade9'];
 }elseif($_GET['grade10'])
 {
    $grade10 = $_GET['grade10'];
 }elseif($_GET['grade11'])
 {
   $grade11 = $_GET['grade11'];
 }elseif($_GET['grade12'])
 {
    $grade12 = $_GET['grade12'];
 }
}


 ?>
