<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (isset($_GET['LimBtn']))
       {
        if ($_GET['district'])
         {
          ?>
            <h4>Select Circut</h4>
          <form class="" action="schoolSelection.php" method="GET">
            <select class="" name="CircutSelection">
              <option value="None">Select Circut</option>
              <option value="Mankweng Circut">Mankweng Circut</option><br><br>
              <option value="Kgakotlou">Kgakotlou</option><br><br>
            </select>
            <input type="hidden" name="district" value="<?php echo $_GET['district']; ?>">
            <input type="hidden" name="provinceName" value="<?php echo $_GET['provinceName']; ?>">
            <input type="hidden" name="UserID" value="<?php echo $_GET['UserID']; ?>">
            <input type="hidden" name="ParentID" value="<?php echo $_GET['ParentID']; ?>">
            <button type="submit" name="SubmitCircut">submit</button>
          </form>

           <?php
         }
       }
     ?>

  </body>
</html>
