<?php

include_once '../DatabaseConnection/DBconnection.php';
include_once '../Model/LearnerPK.php';
include_once '../Control/learnersPK.php';




?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <p>Parent Information</p>
      <form class="" action="../Objects/ParentInfObj.php" method="POST">
        <input type="text" name="firstName" value="" placeholder=" Enter FirstName">
        <input type="text" name="surname" value="" placeholder="Enter surname">
        <input type="number" name="phoneNumber" value="" placeholder="Enter Phone Nummber">
        <button type="submit" name="submit">Next</button>
        <input type="hidden" name="learnerID" value="<?php
            if (isset($_GET['parentInf']))
             {
               $IDno  = $_GET['IDnumber'];
               $LearnerPK =  new  LearnersPK($IDno);
               $LearnersPK = $LearnerPK -> GetLearnersPK();
                 echo $LearnersPK['user_id'] ;
             }

         ?>">



      </form>
    </div>
  </body>
  <?php

   ?>
</html>
