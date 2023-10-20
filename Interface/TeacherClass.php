
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
     /* dropdown styling*/
     .dropdown {
       position: relative;
       display: inline-block;
     }

     /* Styling for the dropdown button */
     .dropdown .dropbtn {
       background-color: #3498db;
       color: #fff;
       padding: 10px;
       width:200px;
       border: none;
       cursor: pointer;
     }

     /* Styling for the dropdown content */
     .dropdown-content {
       display: none;
       position: absolute;
       background-color: #f9f9f9;
       min-width: 180px;
       width:300px;"
       border: 1px solid #ccc;
       box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
       z-index: 1;
     }

     /* Styling for the checkboxes within the dropdown content */
     .dropdown-content input[type="checkbox"] {
       margin: 5px;
     }
     /*style for two boxes*/
     * {
box-sizing: border-box;
}
/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 450px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
     /* Show the dropdown content when the dropdown button is clicked */
     .dropdown:hover .dropdown-content {
       display: block;
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
        <h2>please select which class are you teaching</h2>
        <form class="" action="../Objects/TeacherclassObj.php" method="GET">

            <div class="dropdown">
              <!-- Dropdown button -->
              <button class="dropbtn">Select Class  </button>
              <!-- Dropdown content -->
              <div class="dropdown-content">
                <!-- Checkboxes within the dropdown content -->
                <label>Class A  <input type="checkbox" name="A" value="A">   </label>
                <label>Class B <input type="checkbox" name="B" value="B"> </label>
                <label>Class C<input type="checkbox" name="C" value="C"><label>
                <label>Class D<input type="checkbox" name="D" value="D"><label>
                <label>Class E<input type="checkbox" name="E" value="E"><label>
                  <br><br>
                  <input type="hidden" name="gradeChoice" value="<?php echo $_GET['gradeChoice'] ?>">
                 <input type="hidden" name="school" value="<?php echo $_GET['school'] ?>">
                 <input type="hidden" name="userID" value="<?php echo $_GET['userID'] ?>">
                 <input type="hidden" name="province" value="<?php echo $_GET['province'] ?>">
                 <input type="hidden" name="district" value="<?php echo $_GET['district'] ?>">
                 <input type="hidden" name="circut" value="<?php echo $_GET['circut'] ?>">

                <button type="submit" name="submit">Next</button>

              </div>
            </div>


        </form>

      </div>
    <footer>
        &copy; 2023 High School System. All rights reserved.
    </footer>
</body>
</html>
