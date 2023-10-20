<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    include_once '../DatabaseConnection/DBconnection.php';
    include_once '../Model/SelectSchool.php';
    include_once '../View/SelectSchools.php';

  $SchoolNameObj = new SelectSchools();

     if (isset($_GET['SubmitCircut']))
      {
      if ($_GET['CircutSelection']== "Mankweng Circut")
      {

        $schoolNames = $SchoolNameObj->getschoolNamesMankweng();
         $mankweng =array();
        foreach ($schoolNames as $value)
         {
           $mankweng[] = $value['Mankweng_Circut'];
         }
        ?>
          <h4>Select Schools</h4>
          <form class="" action="../Objects/TeacherschoolSelectionObj.php" method="get">
            <select class="" name="schools">
              <option value="None">Select School</option>
              <option value="<?php echo $mankweng[0] ?>"><?php echo $mankweng[0] ?></option>
              <option value="<?php echo $mankweng[1] ?>"><?php echo $mankweng[1] ?></option>
              <option value="<?php echo $mankweng[2] ?>"><?php echo $mankweng[2] ?></option>
              <option value="<?php echo $mankweng[3] ?>"><?php echo $mankweng[3] ?></option>
              <option value="<?php echo $mankweng[4] ?>"><?php echo $mankweng[4] ?></option>
            </select>

            <input type="hidden" name="district" value="<?php echo $_GET['district']; ?>">
            <input type="hidden" name="provinceName" value="<?php echo $_GET['provinceName']; ?>">
            <input type="hidden" name="UserID" value="<?php echo $_GET['UserID']; ?>">
            <input type="hidden" name="CircutSelection" value="<?php echo $_GET['CircutSelection']; ?>">
            <button type="submit" name="submit">submit</button>
          </form>
        <?php
      }elseif ($_GET['CircutSelection']== "Kgakotlou")
      {
        $schoolNames = $SchoolNameObj->getschoolNamesKgakatlou();
         $kgakotlou =array();
        foreach ($schoolNames as $value)
         {
           $kgakotlou[] = $value['Kgakatlou'];
         }
        ?>
        <h4>Select School</h4>
          <form class="" action="../Objects/schoolSelectionObj.php" method="get">
            <select class="" name="schools">
              <option value="None">Select School</option>
              <option value="<?php echo $kgakotlou[0] ?>"><?php echo $kgakotlou[0] ?></option>
              <option value="<?php echo $kgakotlou[1] ?>"><?php echo $kgakotlou[1] ?></option>
            </select>

            <input type="hidden" name="district" value="<?php echo $_GET['district']; ?>">
            <input type="hidden" name="provinceName" value="<?php echo $_GET['provinceName']; ?>">
            <input type="hidden" name="UserID" value="<?php echo $_GET['UserID']; ?>">
            <input type="hidden" name="CircutSelection" value="<?php echo $_GET['CircutSelection']; ?>">
            <button type="submit" name="submit">submit</button>
          </form>
        <?php
      }
      }

     ?>

  </body>
</html>
