<?php include "../includes/header.php"?>
<?php include "../includes/nav.php"?>

<div class="container-fluid p-4 shadow mx-auto" style=" max-width:1000px">
<?php include "../includes/crumbs.php"?>
<h4 class="text-center" >Profile</h4>

<div class="row">

<div class="col-sm-4 col-md-3">
<img src="../female1.jpg" class="border border-primary d-block mx-auto rounded-circle" style="width:150px;">
</div>
<div class="col-sm-4 col-md-9 bg-light p-2">
<table class="table table-hover table-striped">
    <tr><th>First Name:</th><td>Bohlale</td></tr>
    <tr><th>Last Name:</th><td>Kubayi</td></tr>
    <tr><th>Gender:</th><td>Female</td></tr>


</table>
</div>
</div>
<hr>
<div class="container-fluid">

  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Parent Info</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Teachers</a>
  </li>

</ul>


</div>
<nav class="navbar navbar-light bg-light">
  <form class="container-fluid">
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</span>
      <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
    </div>
  </form>
</nav>
</div>

<?php include "../includes/footer.php"?>
