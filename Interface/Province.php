<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <h1>Select Provice</h1>
    <form class="" action="District.php" method="GET">
      <select class="" name="prov">
        <option value="None">Select Province</option>
        <option value="Limpopo">Limpopo</option>
        <option value="Mpumalanga">Mpumalanga</option>
        <option value="Gauteng">Gauteng</option>
        <option value="North West">North West</option>
        <option value="Northern Cape">Northern Cape</option>
        <option value="Eastern Cape">Eastern Cape</option>
        <option value="Western Cape">Western Cape</option>
        <option value="Kwa Zulu Natal">Kwa Zulu Natal</option>
        <option value="Free State">Free State"</option>
      </select>
        <input type="hidden" name="UserID" value="<?php echo $_GET['userID'] ;?>">
        <input type="hidden" name="ParentPhone" value="<?php echo $_GET['Parentphone']; ?>">
      <button type="submit" name="submit">Next</button>
    </form>
  </body>
</html>
