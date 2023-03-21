<?php

include_once '../DatabaseConnection/DBconnection.php';
include_once '../Model/GetBlockID.php';
include_once '../Control/GetBlocksID.php';
include_once '../Model/SubjectsChoice.php';
include_once '../Control/SubjectsChoices.php';
include_once '../Model/SubjectChoice10To12.php';
include_once '../Control/SubjectChoices10To12.php';

if (!isset($_GET['submit']))
 {
  header("Location: ../Interface/SubjectSelection.php");
 }else
 {
  $userID = $_GET['userID'];
  $BlockIDobject = new GetBlockIDs();
  $BlockID  = $BlockIDobject -> BlocksID($userID);
  $ResultBlockID =  $BlockID['classID'];

 if ($_GET['selectedGrade'] == "Grade 8")
  {

    $subjChoiceObj = new SubjChoices($_GET['Sepedi'],$_GET['English'],$_GET['Mathematics'],
    $_GET['LO'],$_GET['NS'],$_GET['SS'],$_GET['EMS'],$ResultBlockID,$_GET['userID'],$_GET['selectedGrade'],$_GET['className'] ,
    $_GET['gradeID'],$_GET['schoolID'],$_GET['school'],$_GET['province'],$_GET['district'],$_GET['circut'],$_GET['parentID']);
    $subjChoiceObj ->SelectedSubj();
  }elseif ($_GET['selectedGrade'] == "Grade 9")
   {
     $subjChoiceObj = new SubjChoices($_GET['Sepedi'],$_GET['English'],$_GET['Mathematics'],
     $_GET['LO'],$_GET['NS'],$_GET['SS'],$_GET['EMS'],$ResultBlockID,$_GET['userID'],$_GET['selectedGrade'],$_GET['className'],
     $_GET['gradeID'],$_GET['schoolID'],$_GET['school'],$_GET['province'],$_GET['district'],$_GET['circut'],$_GET['parentID']);
     $subjChoiceObj ->SelectedSubj();
  }elseif ($_GET['selectedGrade'] == "Grade 10")
   {
      $streamObj = new SubjChoiceStreams($_GET['Sepedi'],$_GET['English'],$_GET['LO'],
      $_GET['Mathematics'],$_GET['MathsLit'],$_GET['physics'],$_GET['LS'],$_GET['GEOG'],
      $_GET['Agric'],$_GET['His'],$_GET['ACC'],$_GET['Economic'],$_GET['business'],$_GET['Tourism'],
      $_GET['Consumer'],$ResultBlockID,$_GET['userID'],$_GET['selectedGrade'],$_GET['className'],
      $_GET['gradeID'],$_GET['schoolID'],$_GET['school'],$_GET['province'],$_GET['district'],$_GET['circut'],$_GET['parentID']);

      $streamObj -> SelectedSubjStream();
  }elseif ($_GET['selectedGrade'] == "Grade 11")
   {
     $streamObj = new SubjChoiceStreams($_GET['Sepedi'],$_GET['English'],$_GET['LO'],
     $_GET['Mathematics'],$_GET['MathsLit'],$_GET['physics'],$_GET['LS'],$_GET['GEOG'],
     $_GET['Agric'],$_GET['His'],$_GET['ACC'],$_GET['Economic'],$_GET['business'],$_GET['Tourism'],
     $_GET['Consumer'],$ResultBlockID,$_GET['userID'],$_GET['selectedGrade'],$_GET['className'],
     $_GET['gradeID'],$_GET['schoolID'],$_GET['school'],$_GET['province'],$_GET['district'],$_GET['circut'],$_GET['parentID']);

     $streamObj -> SelectedSubjStream();
  }
  elseif ($_GET['selectedGrade'] == "Grade 12")
   {
     $streamObj = new SubjChoiceStreams($_GET['Sepedi'],$_GET['English'],$_GET['LO'],
     $_GET['Mathematics'],$_GET['MathsLit'],$_GET['physics'],$_GET['LS'],$_GET['GEOG'],
     $_GET['Agric'],$_GET['His'],$_GET['ACC'],$_GET['Economic'],$_GET['business'],$_GET['Tourism'],
     $_GET['Consumer'],$ResultBlockID,$_GET['userID'],$_GET['selectedGrade'],$_GET['className'],
     $_GET['gradeID'],$_GET['schoolID'],$_GET['school'],$_GET['province'],$_GET['district'],$_GET['circut'],$_GET['parentID']);

     $streamObj -> SelectedSubjStream();
  }
  else
  {
    echo "Something Wrong";
  }



 }
