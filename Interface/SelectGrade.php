<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Select Grade</h1>
    <form class="" action="../Objects/GradeObj.php" method="GET">
      <select class="" name="SelectGrade">
        <option value="none">Select Grade</option>
        <option value="Grade 8">Grade 8</option>
        <option value="Grade 9">Grade 9</option>
        <option value="Grade 10">Grade 10</option>
        <option value="Grade 11">Grade 11</option>
        <option value="Grade 12">Grade 12</option>
      </select><br><br>
      <input type="hidden" name="school" value="<?php echo $_GET['school'] ?>">
      <input type="hidden" name="userID" value="<?php echo $_GET['userID'] ?>">
      <input type="hidden" name="province" value="<?php echo $_GET['province'] ?>">
      <input type="hidden" name="district" value="<?php echo $_GET['district'] ?>">
      <input type="hidden" name="circut" value="<?php echo $_GET['circut'] ?>">
      <input type="hidden" name="parentID" value="<?php echo $_GET['parentInf'] ?>">
      <button type="submit" name="submit">Select Grade</button>
    </form>


  </body>
</html>
