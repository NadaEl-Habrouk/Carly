
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add Car </title>
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
      <div class="box">
        <div class="left">
          <div class="logo">Carly</div>
          <div class = "text"> Add Car</div>
        </div>

        <div class="right">
          <h1>Add Car</h1>
          <form method = "post" enctype = "multipart/form-date">
          
                    <div class="info">
                    <label for="air">Air Condition </label>
                    <input type="radio" name="air" value = "Yes" required>Yes
                    <input type="radio" name="air" value = "No" required>No
</div>
            <div class="info">
              <label for="carname">Car Name</label>
              <input type="text" name="carname" id="carname" />
            </div>

            <div class="info">
              <label for="color">Color</label> 
              <input type="text" name="color" id="color"  />
            </div>

            <div class="info">
              <label for="price">Renting Price</label>
              <input type="number" name="r_price" id="r_price" />
            </div>
            <div class="info">
              <label for="s_num">Steats Num</label>
              <input type="number" name="s_num" id="s_num" />
            </div>
            <div class="info">
              <label for="status">Status</label> 
              <input type="text" name="status" id="status"  />
            </div>
            <div class="info">
              <label for="d_num">Doors Num</label>
              <input type="number" name="d_num" id="d_num" />
            </div>
            <form action="" method ="post" autocomplete = "off" enctype = "multipart/form-date">
            <div class="info">
                        <label for="image">Car Image </label>
                        <input type="text" id="image"  name="image"> 
</div>
                  
            <div class="info1">
              <input type="submit" value="Add" name="add_car" />
            </div>

           
          </form>
          <?php
          
if (isset($_POST['add_car'])) {
    include 'config/connect.php';
    $carname = $_POST["carname"];
    $color = $_POST["color"];
    $s_num = $_POST["s_num"];
    $image = $_POST['image'];
    $r_price = $_POST["r_price"];
    $air = $_POST["air"];
    $d_num = $_POST["d_num"];
    $status = $_POST["status"];

    $result = $conn->query("INSERT INTO car(car_name,color,steats_number,car_image,renting_price,is_air_conditioned,door_num,status) VALUES ('$carname','$color','$s_num','$image','$r_price' ,'$air','$d_num','$status')");
    if ($result) {
      echo "<script type = \"text/javascript\">
      alert(\"Car Added Successfully \");
      window.location = (\"viewCars.php\")
      </script>";
    } else {
        echo "<script type = \"text/javascript\">
      alert(\"Fail To Add Car. Try Again\");
      window.location = (\"viewCars.php\")
      </script>";
    }
}








    

            ?>   
  </body>
</html>
