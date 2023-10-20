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
        <h2>Parent Information</h2>
        <form action="../Objects/ParentInfObj.php" method="post">
            <input type="text" placeholder="Enter First Name" name="firstName" required>
            <input type="text" placeholder="Enter Surname" name="surname" required>
            <input type="number" placeholder="Enter Phone Number" name="phoneNumber" required>
            <button type="submit" name="submit">Next</button>
            <input type="hidden" name="learnerID" value="<?php
                if (isset($_GET['parentInf']))
                 {
                   $IDno  = $_GET['IDnumber'];
                   $LearnerPK =  new  LearnersPK($IDno);
                   $LearnersPK = $LearnerPK -> GetLearnersPK();
                     echo $LearnersPK['user_id'] ;
                 }

             ?>"  >
        </form>
      </div>

    <footer>
        &copy; 2023 High School System. All rights reserved.
    </footer>
</body>
</html>
