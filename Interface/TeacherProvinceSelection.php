<!DOCTYPE html>
<?php
include_once '../DatabaseConnection/DBconnection.php';
include_once "../Model/GetTeacherUserID.php";
include_once "../Control/GetTeacherUserIDs.php";
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <h1>Select Your Provice</h1>
    <form class="" action="TeacherDistrict.php" method="GET">
      <select class="" name="prov">
        <option value="None">Select Province</option>
        <option value="Limpopo">Limpopo</option>
        <option value="Mpumalanga">Mpumalanga</option>
        <option value="Gauteng">Gauteng</option>
        <option value="North West">North West</option>
        <option value="Northern Cape">Northern Cape</option>
        <option value="Eastern Cape">Eastern Cape</option>
        <option value="Western Cape">Western Cape</option>
        <option value="Kwa Zulu Natal">Kwa Zulu Natal</option>
        <option value="Free State">Free State"</option>
      </select>
       <?php


          $userIDobj =  new TeacherIDs();
          $teacherID = $_GET['IDno'];
          $teacherUserID = $userIDobj -> teachersIDs($teacherID);
        ?>
        <input type="hidden" name="UserID" value="<?php echo $teacherUserID['user_id']?>">
      <button type="submit" name="submit">Next</button>
    </form>
  </body>
</html>
