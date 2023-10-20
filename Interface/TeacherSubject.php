<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Please Select your subject you teaching</h1>
   <?php

    if ($_GET['GradeChoice'] == "Grade 8")
     {
      ?>
      <form class="" action="index.html" method="post">
        <input type="checkbox" name="" value="Sepedi">  Sepedi Home Language  <br><br>
        <input type="checkbox" name="" value="English">  English first Editional Language <br><br>
        <input type="checkbox" name="" value="afrikaans">   afrikaans<br><br>
        <input type="checkbox" name="" value="LO">   Life Orientation<br><br>
        <input type="checkbox" name="" value="NS">   Natural Science<br><br>
        <input type="checkbox" name="" value="HSS">   Human Social Science<br><br>
        <input type="checkbox" name="" value="EMS">   Economic Management Science<br><br>
        <button type="submit" name="Submit">Submit</button>
      </form>

     <?php
    }
    ?>
  </body>
</html>
