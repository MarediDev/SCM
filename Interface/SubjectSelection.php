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
        <h2>Select Subjects</h2>
        <form class="" action="../Objects/SubjectsObj.php" method="GET">
           <?php if ($_GET['selectedGrade']== "Grade 8")
            {
            ?>
            <div class="dropdown">
              <!-- Dropdown button -->
              <button class="dropbtn">Select subjects for <?php echo $_GET['selectedGrade'] ; ?> </button>
              <!-- Dropdown content -->
              <div class="dropdown-content">
                <!-- Checkboxes within the dropdown content -->
                <label>Sepedi Home Language<input type="checkbox" name="Sepedi" value="Sepedi Home Langauge">   </label>
                <label>English Home Langauge  <input type="checkbox" name="English" value="English Home Langauge"> </label>
                <label>Mathematics<input type="checkbox" name="Mathematics" value="Mathematics"><label>
                <label>Life Orientation<input type="checkbox" name="LO" value="Life Orientation"><label>
                <label>Natural Science<input type="checkbox" name="NS" value="Natural Science"><label>
                <label>Social Science<input type="checkbox" name="SS" value="Social Science"><label>
                <label>Economic Management Science<input type="checkbox" name="EMS" value="Economic Management Science"> <label><br>
                <label><input type="hidden" name="className" value="<?php echo $_GET['className'] ?>">
                <label><input type="hidden" name="userID" value="<?php echo $_GET['userID'] ?>">
                <label><input type="hidden" name="selectedGrade" value="<?php echo $_GET['selectedGrade'] ?>">
                <label><input type="hidden" name="gradeID" value="<?php echo $_GET['gradeID'] ?>">
                <label><input type="hidden" name="schoolID" value="<?php echo $_GET['schoolID'] ?>">
                <label><input type="hidden" name="school" value="<?php echo $_GET['school'] ?>">
                <label><input type="hidden" name="province" value="<?php echo $_GET['province'] ?>">
                <label><input type="hidden" name="district" value="<?php echo $_GET['district'] ?>">
                <label><input type="hidden" name="circut" value="<?php echo $_GET['circut'] ?>">
                <label><input type="hidden" name="parentID" value="<?php echo $_GET['parentID'] ?>">
                <button type="submit" name="submit">submit</button>

              </div>
            </div>

            <?php
          }elseif($_GET['selectedGrade']== "Grade 9")
          {

            ?>
            <div class="dropdown">
              <!-- Dropdown button -->
              <button class="dropbtn">Select subjects for <?php echo $_GET['selectedGrade'] ; ?></button>
              <!-- Dropdown content -->
              <div class="dropdown-content">
                <!-- Checkboxes within the dropdown content -->
                <label>Sepedi Home Language<input type="checkbox" name="Sepedi" value="Sepedi Home Langauge">   </label>
                <label>English Home Langauge  <input type="checkbox" name="English" value="English Home Langauge"> </label>
                <label>Mathematics<input type="checkbox" name="Mathematics" value="Mathematics"><label>
                <label>Life Orientation<input type="checkbox" name="LO" value="Life Orientation"><label>
                <label>Natural Science<input type="checkbox" name="NS" value="Natural Science"><label>
                <label>Social Science<input type="checkbox" name="SS" value="Social Science"><label>
                <label>Economic Management Science<input type="checkbox" name="EMS" value="Economic Management Science"> <label><br>
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

              </div>
            </div>
            <?php
          }elseif($_GET['selectedGrade']== "Grade 10")
          {
            ?>

            <div class="dropdown">
              <!-- Dropdown button -->
              <button class="dropbtn">Select subjects for <?php echo $_GET['selectedGrade'] ; ?></button>
              <!-- Dropdown content -->
              <div class="dropdown-content">
                <!-- Checkboxes within the dropdown content -->
                <label>Sepedi Home Language<input type="checkbox" name="Sepedi" value="Sepedi Home Langauge">   </label>
                <label>English Home Langauge  <input type="checkbox" name="English" value="English Home Langauge"> </label>
                <label>Life Orientation<input type="checkbox" name="LO" value="Life Orientation"><label>
                <label>Mathematics<input type="checkbox" name="Mathematics" value="Mathematics"><label>
                <label>Mathematics litaracy<input type="checkbox" name="MathsLit" value="Mathematics litaracy"><label>
                <label>physical Science<input type="checkbox" name="physics" value="physical Science"><label>
                  <label>Life Science<input type="checkbox" name="LS" value="Life Science"> <label><br>
                    <label>Geography<input type="checkbox" name="GEOG" value="Geography"> <label><br>
                      <label>Agriculture<input type="checkbox" name="Agric" value="Agriculture"> <label><br>
                        <label>History<input type="checkbox" name="His" value="History"> <label><br>
                          <label>Accounting<input type="checkbox" name="ACC" value="Accounting"> <label><br>
                            <label>Economic<input type="checkbox" name="Economic" value="Economic"> <label><br>
                              <label>Business<input type="checkbox" name="busines" value="Business"> <label><br>
                                <label>Tourism<input type="checkbox" name="Tourism" value="Tourism"> <label><br>
                <label>Consumer<input type="checkbox" name="Consumer" value="Consumer"> <label><br>
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

              </div>
            </div>

            <?php
          }elseif($_GET['selectedGrade']== "Grade 11")
          {
            ?>
            <div class="dropdown">
              <!-- Dropdown button -->
              <button class="dropbtn">Select subjects for <?php echo $_GET['selectedGrade'] ; ?></button>
              <!-- Dropdown content -->
              <div class="dropdown-content">
                <!-- Checkboxes within the dropdown content -->
                <label>Sepedi Home Language<input type="checkbox" name="Sepedi" value="Sepedi Home Langauge">   </label>
                <label>English Home Langauge  <input type="checkbox" name="English" value="English Home Langauge"> </label>
                <label>Life Orientation<input type="checkbox" name="LO" value="Life Orientation"><label>
                <label>Mathematics<input type="checkbox" name="Mathematics" value="Mathematics"><label>
                <label>Mathematics litaracy<input type="checkbox" name="MathsLit" value="Mathematics litaracy"><label>
                <label>physical Science<input type="checkbox" name="physics" value="physical Science"><label>
                  <label>Life Science<input type="checkbox" name="LS" value="Life Science"> <label><br>
                    <label>Geography<input type="checkbox" name="GEOG" value="Geography"> <label><br>
                      <label>Agriculture<input type="checkbox" name="Agric" value="Agriculture"> <label><br>
                        <label>History<input type="checkbox" name="His" value="History"> <label><br>
                          <label>Accounting<input type="checkbox" name="ACC" value="Accounting"> <label><br>
                            <label>Economic<input type="checkbox" name="Economic" value="Economic"> <label><br>
                              <label>Business<input type="checkbox" name="busines" value="Business"> <label><br>
                                <label>Tourism<input type="checkbox" name="Tourism" value="Tourism"> <label><br>
                <label>Consumer<input type="checkbox" name="Consumer" value="Consumer"> <label><br>
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

              </div>
            </div>

            <?php
          }elseif($_GET['selectedGrade']== "Grade 12")
          {
            ?>
            <div class="dropdown">
              <!-- Dropdown button -->
              <button class="dropbtn">Select subjects for <?php echo $_GET['selectedGrade'] ; ?></button>
              <!-- Dropdown content -->
              <div class="dropdown-content">
                <!-- Checkboxes within the dropdown content -->
                <label>Sepedi Home Language<input type="checkbox" name="Sepedi" value="Sepedi Home Langauge">   </label>
                <label>English Home Langauge  <input type="checkbox" name="English" value="English Home Langauge"> </label>
                <label>Life Orientation<input type="checkbox" name="LO" value="Life Orientation"><label>
                <label>Mathematics<input type="checkbox" name="Mathematics" value="Mathematics"><label>
                <label>Mathematics litaracy<input type="checkbox" name="MathsLit" value="Mathematics litaracy"><label>
                <label>physical Science<input type="checkbox" name="physics" value="physical Science"><label>
                  <label>Life Science<input type="checkbox" name="LS" value="Life Science"> <label><br>
                    <label>Geography<input type="checkbox" name="GEOG" value="Geography"> <label><br>
                      <label>Agriculture<input type="checkbox" name="Agric" value="Agriculture"> <label><br>
                        <label>History<input type="checkbox" name="His" value="History"> <label><br>
                          <label>Accounting<input type="checkbox" name="ACC" value="Accounting"> <label><br>
                            <label>Economic<input type="checkbox" name="Economic" value="Economic"> <label><br>
                              <label>Business<input type="checkbox" name="busines" value="Business"> <label><br>
                                <label>Tourism<input type="checkbox" name="Tourism" value="Tourism"> <label><br>
                <label>Consumer<input type="checkbox" name="Consumer" value="Consumer"> <label><br>
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

              </div>
            </div>
            <?php
          }?>
        </form>

      </div>
    <footer>
        &copy; 2023 High School System. All rights reserved.
    </footer>
</body>
</html>
