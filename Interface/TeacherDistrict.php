
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
      include_once "../Model/ProvinceDistrict.php";
      include_once "../View/ProvinceDistricts.php";
        include_once "../Model/ParentID.php";
      include_once "../View/ParentsID.php";


       if (!isset($_GET['submit']))
        {
         header("Location: TeacherProvinceSelection.php");
       }else if($_GET['prov']=="Limpopo")
       {
        $dist =  new Districts();
        $LimpopoDistrict = $dist -> Limpopion();
        $District= array();
        foreach ($LimpopoDistrict as $value)
        {
         $District[] = $value['Limpopo'];
        }
        ?>
        <h4>Please Select your District</h4>
         <form class="" action="TeacherCircut.php" method="GET">
           <select style="width: 280px; height: 30px;" class="" name="district">
             <option value="none">Select</option>

             <option value="<?php echo  $District[0] ?>">Capricon</option>
             <option value="<?php echo  $District[1] ?>">Mapani</option>
             <option value="<?php echo  $District[2] ?>">Sekhukhune District</option>
             <option value="<?php echo  $District[3] ?>">Vhembe</option>
             <option value="<?php echo  $District[4] ?>">WaterBerg</option>
           </select>
            <input type="hidden" name="provinceName" value="<?php echo $_GET['prov']?>">
            <input type="hidden" name="UserID" value="<?php echo $_GET['UserID'] ?>">
          <?php

           ?>
<br><br>
           <button type="submit" name="LimBtn">Submit</button>
         </form>
        <?php
      }else if($_GET['prov']=="Mpumalanga")
       {
         $dist =  new Districts();
         $MpumalangaDistrict = $dist -> Mpumalangas();
         $District= array();
          foreach ($MpumalangaDistrict as $value)
           {
             $District[] = $value['Mpumalanga'];
           }
          ?>
          <h4>Please Select your District</h4>
           <form class="" action="circut.php" method="GET">
             <select  style="width: 280px; height: 30px;" class="" name="district">
               <option value="none">Select</option>
               <option value="<?php echo  $District[0] ?>">Ehlanzeni</option>
               <option value="<?php echo  $District[1] ?>">Gert Sibande</option>
               <option value="<?php echo  $District[2] ?>">Nkangala</option>
             </select>
             <input type="hidden" name="provinceName" value="<?php echo $_GET['prov']?>">
             <input type="hidden" name="UserID" value="<?php echo $_GET['UserID'] ?>">
             <?php

              ?>
                    <br><br>
             <button type="submit" name="MpBtn">Submit
             </button>
           </form>
           <?php
        }
        ?>
      </div>
    <footer>
        &copy; 2023 High School System. All rights reserved.
    </footer>
</body>
</html>
