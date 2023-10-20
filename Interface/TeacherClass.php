<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>please select which class are you teaching</h1>

    <form class="" action="../Objects/TeacherclassObj.php" method="GET">
    A  <input type="radio" name="A" value="A"><br><br>
    B  <input type="radio" name="B" value="B"><br><br>
    C  <input type="radio" name="C" value="C"><br><br>
    D  <input type="radio" name="D" value="D"><br><br>
    E  <input type="radio" name="E" value="E"><br><br>

     <input type="hidden" name="gradeChoice" value="<?php echo $_GET['gradeChoice'] ?>">
    <input type="hidden" name="school" value="<?php echo $_GET['school'] ?>">
    <input type="hidden" name="userID" value="<?php echo $_GET['userID'] ?>">
    <input type="hidden" name="province" value="<?php echo $_GET['province'] ?>">
    <input type="hidden" name="district" value="<?php echo $_GET['district'] ?>">
    <input type="hidden" name="circut" value="<?php echo $_GET['circut'] ?>">

      <button type="submit" name="submit">NEXT</button>
    </form>

  </body>
</html>
