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
        .SignIn-container {
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
    <div class="SignIn-container">
        <h2>Account Information</h2>
        <form action="../Objects/LearnerAccountObj.php" method="post">
            <input  type="text" placeholder="First Name" name="firstName" required>
            <input type="text" placeholder="Surname" name="surname" required>
            <input type="number" placeholder="ID Number" name="ID" required>
            <select   name="gender" style="width: 100%; height:33px;">
              <option value="NonGender" >Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select><br><br>
            <select  name="Rank" style="width: 100%; height:33px;">>
              <option value="NonRank">Select Rank</option>
              <option value="Learner">Learner</option>
              <option value="Teacher">Teacher</option>
            </select><br><br>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" name="submit">Next</button>
        </form>
        <p>Already have an account? <a href="../index.php">Sign In</a></p>
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
    <footer>
        &copy; 2023 High School System. All rights reserved.
    </footer>
</body>
</html>
