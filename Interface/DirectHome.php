<?php
 session_start()
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

   if ($_SESSION['Rank']=="Learner")
   {
     header("Location: LearnerHome.php");

   }
   elseif ($_SESSION['Rank']=="teacher")
    {
      header("Location: TeacherHome.php");

   }
   elseif ($_SESSION['Rank']==" Vice principle")
    {
     header("Location: VicePrincipleHome.php");
   }
   elseif ($_SESSION['Rank']=="Principle")
    {
     header("Location: PrincipleHome.php");
   }
   elseif ($_SESSION['Rank']=="circut Manager")
    {
    header("Location: CircutManagerHome.php");
   }
   elseif ($_SESSION['Rank']=="Super Admin")
    {
     header("Location: SuperAdminHome.php");
   }else {
     header("Location: index.php");
   }

     ?>

  </body>
</html>
