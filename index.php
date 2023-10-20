<?php include "Interface/includes/header.php"?>
<?php

  if (isset($_GET['result']))
  {
    if ($_GET['result'] == "regSuccess")
     {
      echo "Congratutlation you succesfully registered , please sign in to your Online learning system";
     }
     ?>

<div class="container-fluid">
    <form class="" action="Objects/usersSignInObj.php" method="POST">


<div class="p-4 mx-auto shadow rounded" style="width:100%;margin-top: 50px; max-width:340px;">

<h2 class="text-center">SASCS</h2>
<img src="hair3.jpg" class="border border-primary d-block mx-auto rounded-circle" style="width:120px;">
<h3>Login</h3>
<input class="form-control" type="number" name="IDno" value="" placeholder="Learner's ID NO" autofocus>
<br>
<input class="form-control" type="password" name="password" placeholder="Password">
<br>
<button class=" btn btn-primary" type="submit" name="submit">Login</button>
<button class=" btn btn-danger float-end" type="submit" name="submit">SingUp</button>
</form>
</div>

</div>
<?php
exit();
}
?>

<div class="container-fluid">
    <form class="" action="Objects/usersSignInObj.php" method="POST">


<div class="p-4 mx-auto shadow rounded" style="width:100%;margin-top: 50px; max-width:340px;">

<h2 class="text-center">SASCS</h2>
<img src="hair3.jpg" class="border border-primary d-block mx-auto rounded-circle" style="width:120px;">
<h3>Login</h3>
<input class="form-control" type="number" name="IDno" value="" placeholder="Learner's ID NO" autofocus>
<br>
<input class="form-control" type="password" name="password" placeholder="Password">
<br>
<button class=" btn btn-primary" type="submit" name="submit">Login</button>

</form>
<form class="" action="Interface/LearnerAccountCreation.php" method="post">
  <button class=" btn btn-danger float-end">SingUp</button>
</form>


</div>
<p> You dont have account? if yes and your a Learner please create one  <a href="Interface/LearnerAccountCreation.php">here</a></p>
 </form>

</div>

<?php include "Interface/includes/footer.php"?>
