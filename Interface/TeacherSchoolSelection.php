<?php
include_once '../DatabaseConnection/DBconnection.php';
include_once '../Model/LearnerPK.php';
include_once '../Control/learnersPK.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High School System</title>
    <style>
        /* Styling for the header */
        header {
            background: #007BFF;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        /* Styling for the navigation menu */
        nav {
            background: #333;

            padding: 10px 0;
            text-align: center;

        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;

        }

        nav li {
            display: inline;
            margin: 0 20px;

        }
        nav li a{
          text-decoration :none;
          color:white;

        }
        nav li a:hover
        {
          color: blue;
        }


        /* Styling for the login container */
        .login-container {
            text-align: center;
            margin: 50px auto;
            width: 300px;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Styling for the form elements */
        input {
            width: 280px;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Styling for the footer */
        footer {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to SCM</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="login-container">
      <?php

      include_once '../DatabaseConnection/DBconnection.php';
      include_once '../Model/SelectSchool.php';
      include_once '../View/SelectSchools.php';

    $SchoolNameObj = new SelectSchools();

       if (isset($_GET['SubmitCircut']))
        {
        if ($_GET['CircutSelection']== "Mankweng Circut")
        {

          $schoolNames = $SchoolNameObj->getschoolNamesMankweng();
           $mankweng =array();
          foreach ($schoolNames as $value)
           {
             $mankweng[] = $value['Mankweng_Circut'];
           }
          ?>
            <h4>Select Schools</h4>
            <form class="" action="../Objects/TeacherschoolSelectionObj.php" method="get">
              <select style="width: 280px; height: 30px;" class="" name="schools">
                <option value="None">Select School</option>
                <option value="<?php echo $mankweng[0] ?>"><?php echo $mankweng[0] ?></option>
                <option value="<?php echo $mankweng[1] ?>"><?php echo $mankweng[1] ?></option>
                <option value="<?php echo $mankweng[2] ?>"><?php echo $mankweng[2] ?></option>
                <option value="<?php echo $mankweng[3] ?>"><?php echo $mankweng[3] ?></option>
                <option value="<?php echo $mankweng[4] ?>"><?php echo $mankweng[4] ?></option>
              </select>

              <input type="hidden" name="district" value="<?php echo $_GET['district']; ?>">
              <input type="hidden" name="provinceName" value="<?php echo $_GET['provinceName']; ?>">
              <input type="hidden" name="UserID" value="<?php echo $_GET['UserID']; ?>">
              <input type="hidden" name="CircutSelection" value="<?php echo $_GET['CircutSelection']; ?>">
            <br><br>
              <button type="submit" name="submit">submit</button>
            </form>
          <?php
        }elseif ($_GET['CircutSelection']== "Kgakotlou")
        {
          $schoolNames = $SchoolNameObj->getschoolNamesKgakatlou();
           $kgakotlou =array();
          foreach ($schoolNames as $value)
           {
             $kgakotlou[] = $value['Kgakatlou'];
           }
          ?>
          <h4>Select School</h4>
            <form class="" action="../Objects/schoolSelectionObj.php" method="get">
              <select style="width: 280px; height: 30px;" class="" name="schools">
                <option value="None">Select School</option>
                <option value="<?php echo $kgakotlou[0] ?>"><?php echo $kgakotlou[0] ?></option>
                <option value="<?php echo $kgakotlou[1] ?>"><?php echo $kgakotlou[1] ?></option>
              </select>

              <input type="hidden" name="district" value="<?php echo $_GET['district']; ?>">
              <input type="hidden" name="provinceName" value="<?php echo $_GET['provinceName']; ?>">
              <input type="hidden" name="UserID" value="<?php echo $_GET['UserID']; ?>">
              <input type="hidden" name="CircutSelection" value="<?php echo $_GET['CircutSelection']; ?>">
             <br><br>
              <button type="submit" name="submit">submit</button>
            </form>
          <?php
        }
        }

       ?>
      </div>
    <footer>
        &copy; 2023 High School System. All rights reserved.
    </footer>
</body>
</html>
