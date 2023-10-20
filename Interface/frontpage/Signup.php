<?php include "../includes/header.php"?>


  <div class="container-fluid">


<div class="p-4 mx-auto shadow rounded" style="width:100%;margin-top: 50px; max-width:340px;">

<h2 class="text-center">SASCS</h2>
<img src="../hair3.jpg" class="border border-primary d-block mx-auto rounded-circle" style="width:100px;">
<h3>SignUp</h3>
<input class="form-control" type="first names" name="first names" placeholder="first names" >
<br>
<input class="form-control" type="last name" name="last name" placeholder="last name" >
<br>
<input class="form-control" type="ID_Number" name="ID_Number" placeholder="Leaner ID Number" >
<br>
<input class="form-control" type="Date_of_birth" name="Date_of_birth" placeholder="Date Of Birth" >
<br>
<input class="form-control" type="email" name="email" placeholder="Email Adress" >
<br>
<input class="form-control" type="Phone_Number" name="Phone_Number" placeholder="Phone_Number" >
<br>
<select class="form-control">
  <option>--Select A Gender--</option>
  <option>Male</option>
  <option>Female</option>
</select>
<br/>
<select class="form-control">
  <option value="">--Select A Status--</option>
  <option value="student">Student</option>
  <option value="teacher">Teacher</option>
</select>
<br>

<input class="form-control" type="password" name="password" placeholder="password">
<br>
<button class=" btn btn-primary">SignUP</button>
<button class=" btn btn-danger float-end">Cancel</button>

</div>

  </div>




<?php include "../includes/footer.php"?>
