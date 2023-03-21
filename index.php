<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      if (isset($_GET['result']))
      {
        if ($_GET['result'] == "regSuccess")
         {
          echo "Congratutlation you succesfully registered , please sign in to your Online learning system";
         }
         ?><br><br>
         <div class="">
            <form class="" action="Objects/usersSignInObj.php" method="POST">
             <input type="text" name="IDno" value="" placeholder="Enter ID Number"><br><br>
             <input type="password" name="password" value="" placeholder="Enter Password"><br><br>
             <button style="width:175px;" type="submit" name="submit">Sign In</button>
            </form>
         </div>
         <?php
         exit();
      }
     ?>

    <div class="">
       <form class="" action="Objects/usersSignInObj.php" method="POST">
        <input type="text" name="IDno" value="" placeholder="Enter ID Number"><br><br>
        <input type="password" name="password" value="" placeholder="Enter Password"><br><br>
        <button style="width:175px;" type="submit" name="submit">Sign Up</button>

      <p> You dont have account? if yes and your a Learner please create one  <a href="Interface/LearnerAccountCreation.php">here</a></p>
       </form>
    </div>

  </body>
</html>
