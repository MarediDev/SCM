<?php
include_once '../DatabaseConnection/DBconnection.php';
include_once '../Model/TClass.php';
include_once '../Control/Tclasses.php';
if (isset($_GET['submit']))
 {

   $A = $_GET['A'];
   //$B= $_GET['B'];
   //$C = $_GET['C'];
   //$D = $_GET['D'];
   //$E= $_GET['E'];

$school = $_GET['school'];
$userID= $_GET['userID'];
$province= $_GET['province'];
$district= $_GET['district'];
$circut= $_GET['circut'];
$GradeChoice = $_GET['gradeChoice'];

 $TeacherClassObj =   new  TeacherClasses();
 $TeacherClassObj ->teachersClass($A,$B,$C,$D,$E,$school,$userID,$province,$district,$circut,$GradeChoice);
}
