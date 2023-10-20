<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="">
      <p>Account Information</p>
       <form class="" action="../Objects/LearnerAccountObj.php" method="POST">
        <input type="text" name="firstName" value="" placeholder="FirstName"><br><br>
        <input type="text" name="surname" value="" placeholder="Surname"><br><br>
        <input type="number" name="ID" value="" placeholder="ID Number"><br><br>

        <select style="width:175px;"  class="" name="gender">
          <option value="NonGender">Select</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>

        </select><br><br>
        <select style="width:175px;"  class="" name="Rank">
          <option value="NonRank">Select</option>
          <option value="Learner">Learner</option>
          <option value="Teacher">Teacher</option>
        </select><br><br>
        <input type="password" name="password" value="" placeholder="Password"><br><br>
        <button style="width:175px;" type="submit" name="submit">Next</button>
       </form>
       <br>
       <?php
       if (isset($_GET["error"]))
       {
         // code...


         if ($_GET["error"] == "UserInput")
         {
            ?>
             <p> please fill in all Input field</p>
            <?php
         }elseif($_GET["error"]=="less")
         {
           ?>
            <p> Your ID number is less</p>
           <?php
         }elseif($_GET["error"]=="more")
         {
           ?>
            <p> Your ID number is more</p>
           <?php
         }elseif ($_GET["error"]=="Unselected") {
           ?>
            <p> please Select your Gender</p>
           <?php
         }elseif($_GET["error"]=="Unselected")
         {
           ?>
            <p> please select your rank</p>
           <?php
         }
            }
        ?>
    </div>

  </body>
</html>
