<?php
     include('config/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Update Car </title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Main css file -->
    <link rel="stylesheet" href="assets/css/update.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Josefin+Sans&family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
        <?php

            if(isset($_POST['update_btn']))
            {
                $id = $_POST['update_id'];
                
                $query = "SELECT * FROM car WHERE car_id='$id' ";
                $query_run = mysqli_query($conn, $query);

                foreach($query_run as $row)
                {
                    ?>

      <div class="box">
        <div class="left">
          <div class="logo">Carly</div>
          <div class = "text"> Update Car</div>
        </div>

        <div class="right">
          <h1>Update Car</h1>
          <form method = "post">
            <input type="hidden" name = "update_id" value = "<?php echo $row['car_id']?>" >

            <div class="info">
              <label for="carname">Car Name</label> 
              <input type="text" name="update_cname" value = "<?php echo $row['car_name']?>"  />
            </div>

            <div class="info">
              <label for="color">Color</label>
              <input type="text" name="update_color" value = "<?php echo $row['color']?>" />
            </div>
            <div class="info">
              <label for="image">Image</label>
              <input type="text" name="update_image" value = "<?php echo $row['car_image']?>" />
            </div>
            <div class="info">
              <label for="r_price">Renting Price</label>
              <input type="number" name="update_rprice" value = "<?php echo $row['renting_price']?>" />
            </div>
            <div class="info">
              <label for="s_num">Steats Num</label>
              <input type="number" name="update_snum" value = "<?php echo $row['steats_number']?>" />
            </div>
            <div class="info">
              <label for="status">Status</label>
              <input type="text" name="update_status" value = "<?php echo $row['status']?>" />
            </div>
            <div class="info">
              <label for="air">Air</label>
              <input type="number" name="update_air" value = "<?php echo $row['is_air_conditioned']?>" />
            </div>

            <div class="info">
              <label for="d_num">Door Num</label>
              <input type="number" name="update_dnum" value = "<?php echo $row['door_num']?>" />
            </div>
            

            

            <div class="info1">
              <input type="submit" value="Update" name="updatebtn" />
            </div>

           
          </form>
                            
                        <?php
                }
            }
           
?>
<?php 
if(isset($_POST['updatebtn']))
{
    $id = $_POST['update_id'];
    $cname = $_POST['update_cname'];
    $color = $_POST['update_color'];
    $image = $_POST['update_image'];
    $r_price = $_POST['update_rprice'];
    $status = $_POST['update_status'];
    $air = $_POST['update_air'];
    $dnum = $_POST['update_dnum'];
    $snum = $_POST['update_snum'];
 


    $query = "UPDATE car SET car_name='$cname',color = '$color' , car_image='$image', renting_price='$r_price',steats_number = '$snum',status = '$status',is_air_conditioned ='$air' , door_num = '$dnum' WHERE car_id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
      echo "<script type = \"text/javascript\">
      alert(\"Car Updated Successfully \");
      window.location = (\"viewCars.php\")
      </script>";
    } else {
        echo "<script type = \"text/javascript\">
      alert(\"Fail To Update Car. Try Again\");
      window.location = (\"viewCars.php\")
      </script>";
    }
}

?>
        
        </div>
    </div>
</div>

</div>