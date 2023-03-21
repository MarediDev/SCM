<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="../Objects/SubjectsObj.php" method="GET">
       <?php if ($_GET['selectedGrade']== "Grade 8")
        {
        ?>
        <h1> select Subjects for <?php echo $_GET['selectedGrade'] ; ?></h1>
        <input type="checkbox" name="Sepedi" value="Sepedi Home Langauge"> Sepedi Home Language <br><br>
        <input type="checkbox" name="English" value="English Home Langauge">English Home Langauge<br><br>
        <input type="checkbox" name="Mathematics" value="Mathematics">Mathematics<br><br>
        <input type="checkbox" name="LO" value="Life Orientation">Life Orientation<br><br>
        <input type="checkbox" name="NS" value="Natural Science">Natural Science<br><br>
        <input type="checkbox" name="SS" value="Social Science">Social Science<br><br>
        <input type="checkbox" name="EMS" value="Economic Management Science">Economic Management Science<br><br>
        <input type="hidden" name="className" value="<?php echo $_GET['className'] ?>">
        <input type="hidden" name="userID" value="<?php echo $_GET['userID'] ?>">
        <input type="hidden" name="selectedGrade" value="<?php echo $_GET['selectedGrade'] ?>">
        <input type="hidden" name="gradeID" value="<?php echo $_GET['gradeID'] ?>">
        <input type="hidden" name="schoolID" value="<?php echo $_GET['schoolID'] ?>">
        <input type="hidden" name="school" value="<?php echo $_GET['school'] ?>">
        <input type="hidden" name="province" value="<?php echo $_GET['province'] ?>">
        <input type="hidden" name="district" value="<?php echo $_GET['district'] ?>">
        <input type="hidden" name="circut" value="<?php echo $_GET['circut'] ?>">
        <input type="hidden" name="parentID" value="<?php echo $_GET['parentID'] ?>">
        <button type="submit" name="submit">submit</button>
        <?php
      }elseif($_GET['selectedGrade']== "Grade 9")
      {
        ?>
        <h1>Select Subjects for <?php echo $_GET['selectedGrade'] ; ?></h1>
        <input type="checkbox" name="Sepedi" value="Sepedi Home Langauge"> Sepedi Home Language <br><br>
        <input type="checkbox" name="English" value="English Home Langauge">English Home Langauge<br><br>
        <input type="checkbox" name="Mathematics" value="Mathematics">Mathematics<br><br>
        <input type="checkbox" name="LO" value="Life Orientation">Life Orientation<br><br>
        <input type="checkbox" name="NS" value="Natural Science">Natural Science<br><br>
        <input type="checkbox" name="SS" value="Social Science">Social Science<br><br>
        <input type="checkbox" name="EMS" value="Economic Management Science">Economic Management Science<br><br>
        <input type="hidden" name="className" value="<?php echo $_GET['className'] ?>">
        <input type="hidden" name="userID" value="<?php echo $_GET['userID'] ?>">
        <input type="hidden" name="selectedGrade" value="<?php echo $_GET['selectedGrade'] ?>">
        <input type="hidden" name="gradeID" value="<?php echo $_GET['gradeID'] ?>">
        <input type="hidden" name="schoolID" value="<?php echo $_GET['schoolID'] ?>">
        <input type="hidden" name="school" value="<?php echo $_GET['school'] ?>">
        <input type="hidden" name="province" value="<?php echo $_GET['province'] ?>">
        <input type="hidden" name="district" value="<?php echo $_GET['district'] ?>">
        <input type="hidden" name="circut" value="<?php echo $_GET['circut'] ?>">
        <input type="hidden" name="parentID" value="<?php echo $_GET['parentID'] ?>">
        <button type="submit" name="submit">submit</button>
        <?php
      }elseif($_GET['selectedGrade']== "Grade 10")
      {
        ?>
        <h1>Select Subjects for <?php echo $_GET['selectedGrade'] ; ?></h1>
        <input type="checkbox" name="Sepedi" value="Sepedi Home Langauge">Sepedi Home Langauge<br><br>
        <input type="checkbox" name="English" value="English Home Langauge">English Home Langauge<br><br>
          <input type="checkbox" name="LO" value="Life Orientation">Life Orientation<br><br>
        <input type="checkbox" name="Mathematics" value="Pure Mathematics">Pure Mathematics<br><br>
        <input type="checkbox" name="MathsLit" value="Mathematics litaracy">Mathematics litaracy<br><br>
        <input type="checkbox" name="physics" value="physical Science">physical Science<br><br>
        <input type="checkbox" name="LS" value="Life Science">Life Science<br><br>
        <input type="checkbox" name="GEOG" value="Geography">Geography<br><br>
        <input type="checkbox" name="Agric" value="Agriculture">Agriculture<br><br>
        <input type="checkbox" name="His" value="History">History<br><br>
        <input type="checkbox" name="ACC" value="Accounting">Accounting<br><br>
        <input type="checkbox" name="Economic" value="Economic">Economic<br><br>
        <input type="checkbox" name="business" value="Business">Business<br><br>
        <input type="checkbox" name="Tourism" value="Tourism">Tourism<br><br>
        <input type="checkbox" name="Consumer" value="Consumer">Consumer<br><br>
        <input type="hidden" name="className" value="<?php echo $_GET['className'] ?>">
        <input type="hidden" name="userID" value="<?php echo $_GET['userID'] ?>">
        <input type="hidden" name="selectedGrade" value="<?php echo $_GET['selectedGrade'] ?>">
        <input type="hidden" name="gradeID" value="<?php echo $_GET['gradeID'] ?>">
        <input type="hidden" name="schoolID" value="<?php echo $_GET['schoolID'] ?>">
        <input type="hidden" name="school" value="<?php echo $_GET['school'] ?>">
        <input type="hidden" name="province" value="<?php echo $_GET['province'] ?>">
        <input type="hidden" name="district" value="<?php echo $_GET['district'] ?>">
        <input type="hidden" name="circut" value="<?php echo $_GET['circut'] ?>">
        <input type="hidden" name="parentID" value="<?php echo $_GET['parentID'] ?>">
        <button type="submit" name="submit">submit</button>
        <?php
      }elseif($_GET['selectedGrade']== "Grade 11")
      {
        ?>
        <h1>Select Subjects for <?php echo $_GET['selectedGrade'] ; ?></h1>
        <input type="checkbox" name="Sepedi" value="Sepedi Home Langauge">Sepedi Home Langauge<br><br>
        <input type="checkbox" name="English" value="English Home Langauge">English Home Langauge<br><br>
          <input type="checkbox" name="LO" value="Life Orientation">Life Orientation<br><br>
        <input type="checkbox" name="Mathematics" value="Pure Mathematics">Pure Mathematics<br><br>
        <input type="checkbox" name="MathsLit" value="Mathematics litaracy">Mathematics litaracy<br><br>
        <input type="checkbox" name="physics" value="physical Science">physical Science<br><br>
        <input type="checkbox" name="LS" value="Life Science">Life Science<br><br>
        <input type="checkbox" name="GEOG" value="Geography">Geography<br><br>
        <input type="checkbox" name="Agric" value="Agriculture">Agriculture<br><br>
        <input type="checkbox" name="His" value="History">History<br><br>
        <input type="checkbox" name="ACC" value="Accounting">Accounting<br><br>
        <input type="checkbox" name="Economic" value="Economic">Economic<br><br>
        <input type="checkbox" name="business" value="Business">Business<br><br>
        <input type="checkbox" name="Tourism" value="Tourism">Tourism<br><br>
        <input type="checkbox" name="Consumer" value="Consumer">Consumer<br><br>
          <input type="hidden" name="" value="<?php echo $_GET['selectedGrade'] ?>">
        <input type="hidden" name="className" value="<?php echo $_GET['className'] ?>">
        <input type="hidden" name="userID" value="<?php echo $_GET['userID'] ?>">
    <input type="hidden" name="selectedGrade" value="<?php echo $_GET['selectedGrade'] ?>">
        <input type="hidden" name="gradeID" value="<?php echo $_GET['gradeID'] ?>">
        <input type="hidden" name="schoolID" value="<?php echo $_GET['schoolID'] ?>">
        <input type="hidden" name="school" value="<?php echo $_GET['school'] ?>">
        <input type="hidden" name="province" value="<?php echo $_GET['province'] ?>">
        <input type="hidden" name="district" value="<?php echo $_GET['district'] ?>">
        <input type="hidden" name="circut" value="<?php echo $_GET['circut'] ?>">
        <input type="hidden" name="parentID" value="<?php echo $_GET['parentID'] ?>">
        <button type="submit" name="submit">submit</button>
        <?php
      }elseif($_GET['selectedGrade']== "Grade 12")
      {
        ?>
        <h1>Select Subjects for <?php echo $_GET['selectedGrade'] ; ?></h1>
        <input type="checkbox" name="Sepedi" value="Sepedi Home Langauge">Sepedi Home Langauge<br><br>
        <input type="checkbox" name="English" value="English Home Langauge">English Home Langauge<br><br>
          <input type="checkbox" name="LO" value="Life Orientation">Life Orientation<br><br>
        <input type="checkbox" name="Mathematics" value="Pure Mathematics">Pure Mathematics<br><br>
        <input type="checkbox" name="MathsLit" value="Mathematics litaracy">Mathematics litaracy<br><br>
        <input type="checkbox" name="physics" value="physical Science">physical Science<br><br>
        <input type="checkbox" name="LS" value="Life Science">Life Science<br><br>
        <input type="checkbox" name="GEOG" value="Geography">Geography<br><br>
        <input type="checkbox" name="Agric" value="Agriculture">Agriculture<br><br>
        <input type="checkbox" name="His" value="History">History<br><br>
        <input type="checkbox" name="ACC" value="Accounting">Accounting<br><br>
        <input type="checkbox" name="Economic" value="Economic">Economic<br><br>
        <input type="checkbox" name="business" value="Business">Business<br><br>
        <input type="checkbox" name="Tourism" value="Tourism">Tourism<br><br>
        <input type="checkbox" name="Consumer" value="Consumer">Consumer<br><br>
          <input type="hidden" name="selectedGrade" value="<?php echo $_GET['selectedGrade'] ?>">
        <input type="hidden" name="className" value="<?php echo $_GET['className'] ?>">
        <input type="hidden" name="userID" value="<?php echo $_GET['userID'] ?>">
        <input type="hidden" name="selectedGrade" value="<?php echo $_GET['selectedGrade'] ?>">
        <input type="hidden" name="gradeID" value="<?php echo $_GET['gradeID'] ?>">
        <input type="hidden" name="schoolID" value="<?php echo $_GET['schoolID'] ?>">
        <input type="hidden" name="school" value="<?php echo $_GET['school'] ?>">
        <input type="hidden" name="province" value="<?php echo $_GET['province'] ?>">
        <input type="hidden" name="district" value="<?php echo $_GET['district'] ?>">
        <input type="hidden" name="circut" value="<?php echo $_GET['circut'] ?>">
        <input type="hidden" name="parentID" value="<?php echo $_GET['parentID'] ?>">
        <button type="submit" name="submit">submit</button>
        <?php
      }?>
    </form>

  </body>
</html>
