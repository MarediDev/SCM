<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Select Grades Which you teach</h1>
    <form class="" action="../Objects/TeacherGradeObj.php" method="GET">
      Grade 8  <input type="radio"  name="grade8" value="Grade 8"><br><br>
      Grade 9  <input type="radio"  name="grade9" value="Grade 9"><br><br>
      Grade 10  <input type="radio"  name="grade10" value="Grade 10"><br><br>
      Grade 11 <input type="radio"  name="grade11" value="Grade 11"><br><br>
      Grade 12 <input type="radio"  name="grade12" value="Grade 12"><br><br>

    <br><br>
      <input type="hidden" name="school" value="<?php echo $_GET['school'] ?>">
      <input type="hidden" name="userID" value="<?php echo $_GET['userID'] ?>">
      <input type="hidden" name="province" value="<?php echo $_GET['province'] ?>">
      <input type="hidden" name="district" value="<?php echo $_GET['district'] ?>">
      <input type="hidden" name="circut" value="<?php echo $_GET['circut'] ?>">

      <button type="submit" name="submit">NEXT</button>
    </form>


  </body>
</html>
