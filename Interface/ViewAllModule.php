<?php
 session_start();

 include_once '../DatabaseConnection/DBconnection.php';
 include_once '../Model/ViewAllSubject.php';
 include_once '../View/ViewAllSubjects.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
  if (!isset($_SESSION['user_id']))
   {
   header("Location: ../index.php");
   }else
   {
     ?>
     <h1>All subjects you enrolled to </h1><br><br>
     <?php
    $subjectObj = new  ViewSubjects();
    $result = $subjectObj ->  Allsubjects($_SESSION['user_id']);
    $total = count($result );
    echo $total;
    /*for ($i=0; $i < $total ; $i++) 
    {

    }/*
    /*echo  $sub1  = $result['subject1'].'<br>';
    echo $sub2  = $result['subject2'].'<br>';
    echo $sub3  = $result['subject3'].'<br>';
    echo $sub4  = $result['subject4'].'<br>';
    echo $sub5  = $result['subject5'].'<br>';
    echo $sub6  = $result['subject6'].'<br>';
    echo $sub7  = $result['subject7'].'<br>';
    echo $sub8  = $result['subject8'].'<br>';
    echo $sub9  = $result['subject9'].'<br>';
    echo $sub10  = $result['subject10'].'<br>';
    echo $sub11 = $result['subject11'].'<br>';
    echo $sub12 = $result['subject12'].'<br>';
    echo $sub13 = $result['subject13'].'<br>';
    echo $sub14 = $result['subject14'].'<br>';
    echo $sub15 = $result['subject15'].'<br>';*/

   }
     ?>

  </body>
</html>
