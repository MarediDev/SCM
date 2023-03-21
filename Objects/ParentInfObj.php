<?php

include_once '../DatabaseConnection/DBconnection.php';
include_once "../Model/ParentAccountCreation.php";
include_once "../Control/ParentAccountCreating.php";

if (!isset($_POST['submit']))
 {
  header("Location: ../index.php");
}else if($_POST['learnerID'])
{
  $firstName = $_POST['firstName'];
  $surname = $_POST['surname'];
  $phoneNumber = $_POST['phoneNumber'];
  $LearnerID = $_POST['learnerID'];

  $parentAccount = new ParentAccountCreations($firstName,$surname,$phoneNumber,$LearnerID);
  $parentAccount ->ParentAccounts();

}else {
    header("Location: ../index.php");
}
