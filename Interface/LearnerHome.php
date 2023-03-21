<?php
 Session_start();

 include_once '../DatabaseConnection/DBconnection.php';
 include_once '../Model/GetSchoolName.php';
 include_once '../View/SchoolName.php';

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

      $GetSchoolNameObj  = new GetsName();
      $result =  $GetSchoolNameObj ->GetsSchool($_SESSION['user_id']);
      $schoolName   = $result['schoolName'];
      ?>

      <header>
        <nav>
         <?php echo $schoolName; ?><br><br>
        </nav>
      </header>

        <div class="">
          <a href="../Interface/ViewAllModule.php">Subjects</a>
        </div>

      <?php
    }




     ?>
  </body>
</html>
