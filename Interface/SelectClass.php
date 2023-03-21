<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Select grade block</h1>
    <form class="" action="../Objects/GradeBlock.php" method="GET">
      <select class="" name="BlockName">
        <option value="none">Select Block</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">c</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
      </select><br><br>

      <input type="hidden" name="GradeName" value="<?php Echo $_GET['className']; ?>">
      <input type="hidden" name="userID" value="<?php Echo $_GET['userID'] ;?>">
      <input type="hidden" name="schoolID" value="<?php Echo $_GET['schoolID'] ;?>">
      <input type="hidden" name="school" value="<?php Echo $_GET['school'] ;?>">
      <input type="hidden" name="province" value="<?php Echo $_GET['province'] ;?>">
      <input type="hidden" name="district" value="<?php Echo $_GET['district']; ?>">
      <input type="hidden" name="circut" value="<?php Echo $_GET['circut'] ;?>">
      <input type="hidden" name="parentID" value="<?php Echo $_GET['parentID'] ;?>">
      <button type="submit" name="submit">submit</button>
    </form>


  </body>
</html>
