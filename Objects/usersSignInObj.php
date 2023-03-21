<?php

include_once '../DatabaseConnection/DBconnection.php';
include_once "../Model/UsersSignIn.php";
include_once "../Control/UserSigningIn.php";

if (!isset($_POST['submit']))
 {
   header("Location: ../index.php?signIn=btnUnclick");
 }else
 {
    $IDnumber = $_POST['IDno'];
    $Password = $_POST['password'];

    $users  = new UsersSigningIn($IDnumber,$Password);
    $users -> SigningIn();
 }
