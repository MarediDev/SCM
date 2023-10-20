<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
         <select class="" name="district">
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
           <select class="" name="district">
             <option value="none">Select</option>
             <option value="<?php echo  $District[0] ?>">Ehlanzeni</option>
             <option value="<?php echo  $District[1] ?>">Gert Sibande</option>
             <option value="<?php echo  $District[2] ?>">Nkangala</option>
           </select>
           <input type="hidden" name="provinceName" value="<?php echo $_GET['prov']?>">
           <input type="hidden" name="UserID" value="<?php echo $_GET['UserID'] ?>">
           <?php

            ?>

           <button type="submit" name="MpBtn">Submit
           </button>
         </form>
        <?php
     }
     ?>
  </body>
</html>
