<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Select your second Grade</h1>
    <form class="" action="../Objects/TeacherGradeObj.php" method="GET">
      Grade 9  <input type="checkbox"  name="grade9" value="Grade 9"><br><br>

    <br><br>
      <input type="hidden" name="school" value="<?php echo $_GET['school'] ?>">
      <input type="hidden" name="userID" value="<?php echo $_GET['userID'] ?>">
      <input type="hidden" name="province" value="<?php echo $_GET['province'] ?>">
      <input type="hidden" name="district" value="<?php echo $_GET['district'] ?>">
      <input type="hidden" name="circut" value="<?php echo $_GET['circut'] ?>">

      <button type="submit" name="second">NEXT</button>
    </form>


  </body>
</html>
