<?php 
include ('config/connect.php');
$sql1 = "SELECT * FROM car WHERE renting_price  = 1800 OR renting_price = 2000 OR renting_price = 1700 OR renting_price = 1500 ";
$car = $conn->query($sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carly</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700;800;900&family=Spline+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
            <link rel="website icon" type="png" href="assets/images/logo-1.png">  
</head>

<body>
    <!--------------------- start navbar---------------------- -->
   <?php include('config/header.php')?>
    <!-- -------------------End navbar-------------------------- -->
    <!-- --------------------start landing ------------------------ -->
    <div class="landing">
        <div class="landing-left">
            <h1>find,book,and<br> rental car in <span>Easy</span> <br> steps.</h1>
            <p>Search,find and enjoy your trip with good car.</p>
        </div>
        <div class="landing-right">
            <img src="assets/images/home/b 1.png" alt="">
        </div>
    </div>
    <!-- ------------------end landing ---------------------------- -->
    <!-- - 
    ?>---------------search section --------------------------- -->
    
      
     
    <form method = "post" action = "">
    <div class="search" id="searchacar">
        <p class="text">Where will your rent a car ?</p>
        <div class="search-input">
            <input type="search" name="search">
            <input type="submit" value="Search">
        </div>
       
    </div> 
   
    </form>
<br>
    <style>
    table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    box-shadow: 0 2px 15px #284678;
    border-radius: 12px 12px 0 0;
    margin-bottom: 50px;
  }

  td,
  th {
    padding: 10px 16px;
    text-align: center;
  }

  th {
    background-color:#284678 ;
    color: #fafafa;
    font-family: 'Open Sans', Sans-serif;
    font-weight: bold;
  }

  tr {
    width: 100%;
    background-color: #fafafa;
    font-family: 'Montserrat', sans-serif;
  }

  tr:nth-child(even) {
    background-color: #eeeeee;
  }
</style>
   
    
                                 
    <?php
   
  if(isset($_POST['search'])){
    $search = $_POST['search'];
    $sql2 = "SELECT * FROM car WHERE car_name LIKE '%$search%' OR color LIKE '%$search%'  " ;
    $res = mysqli_query($conn,$sql2);
    $count = mysqli_num_rows($res);
  
    if (empty($_POST['search'])) {
    echo "<h2> Please Write Any Thing For Search </h2>";
}
elseif ($count >0) {
while ($row = mysqli_fetch_assoc($res)) {
    ?>
     <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Car Name</th>
        <th class="text-center">Image</th>
        <th class="text-center">Color</th>
        <th class="text-center">Renting price</th>
        <th class="text-center">Steats Num</th>
        <th class="text-center">Status</th>
        <th class="text-center">Air Condition</th>
        <th class="text-center">Door Num</th>
      </tr>
    </thead>
    
        <tr>
      <td><?= $row['car_id'] ?></td>
      <td><?= $row["car_name"]?></td> 
      <td><img height='100px' src='<?=$row["car_image"]?>'></td>
      <td><?= $row['color'] ?></td>
      <td><?= $row['renting_price'] ?></td>
      <td><?= $row['steats_number'] ?></td>
      <td><?= $row['status'] ?></td>
      <td><?= $row['is_air_conditioned'] ?></td>
      <td><?= $row['door_num'] ?></td>
    </tr>
    

   
          
    <?php
}
?>
</table>
<?php
}
else{
    echo "<h2>This no Car For Search</h2>";
}

}
    
    ?>
    
</div>

    </div>
   
   


  
    <!-- ----------------search section --------------------------- -->
    <!-- -------------------about us ------------------------- -->
    <section class="about" id="Whychooseus">
        <div class="left">
            <img class="imgchoose1" src="assets/images/home/car choose 1.png" alt="">
        </div>
        <div class="right">
            <p class="f1">WHY CHOOSE US?</p>
            <p class="f2">
                we offer the best experience
                <br>
                with our rental deals.
            </p>
            <p class="f3">
                Best price guaranteed
            </p>
            <p class="f1">
                Find a lower price? We’ll refund you 100% of
                <br>
                the difference.
            </p>
            <p class="f3">
                Experience driver
            </p>
            <p class="f1">Don’t have driver? Don’t worry, we have many
                <br>
                experienced driver for you.
            </p>
            <p class="f3">Technical support</p>
            <p class="f1">Have a quetion? ContactCarentall support
                <br>
                anytime when you have problem.
            </p>
            <p class="f3">24-hour car delivery </p>
            <p class="f1">Book your car anytime and we will deliver it
                <br>
                directly to you.
            </p>
        </div>
    </section>
    <!-- -------------------about us ------------------------- -->
    <!-- -------------------rent deals --------------------- -->
    <div class="container" id="PopularRentalDeals">
        <section class="rent-deals">
            <div class="label">
                <p>POPULAR RENTAL DEALS</p>
                <h2>Most popular cars rental deals.</h2>
            </div>
            <!--=======================  Start Car Section =========================  -->

            <div class="car">
         
                <div class="container">
             
                    <div class="cars">
                    <?php 

while ($row = mysqli_fetch_assoc($car)) {
    ?>  
                        <div class="box">
                            <div class="image">
                                <img src="<?php echo $row['car_image']?>" alt="Image">
                            </div>
                            <div class="info">
                                <p>
                                    <i class="fa-solid fa-star"></i> 4.8 <span>(100+Review)</span>
                                </p>
                                <p>  <?php echo $row['color']?><br> <?php echo $row['car_name']?> </p>
                                <div class="car-details">
                                    <p><img src="assets/images/cars/icon-1.png" alt="Icon"> <?php echo $row['steats_number']?> passangers</p>
                                    <p><img src="assets/images/cars/icon-2.png" alt="Icon">  <?php echo $row['status']?> </p>
                                    <p><img src="assets/images/cars/icon-4.png" alt="Icon"><?php echo $row['is_air_conditioned']?> Air Conditioning</p>
                                    <p><img src="assets/images/cars/icon-3.png" alt="Icon"> <?php  echo $row['door_num']?> Doors</p>
                                </div>
                            </div>
                            <div class="car-buy">
                                <p>$<?php echo  $row['renting_price']?><span>/day</span></p>
                               
                            </div>
                        </div>
                        <!---
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/cars/white car 1.png" alt="Image">
                            </div>
                            <div class="info">
                                <p>
                                    <i class="fa-solid fa-star"></i> 4.8 <span>(100+Review)</span>
                                </p>
                                <p> White- <br>Nissan Sentra 2017 </p>
                                <div class="car-details">
                                    <p><img src="assets/images/cars/icon-1.png" alt="Icon"> 2 passangers</p>
                                    <p><img src="assets/images/cars/icon-2.png" alt="Icon"> Manual </p>
                                    <p><img src="assets/images/cars/icon-4.png" alt="Icon"> Air Conditioning</p>
                                    <p><img src="assets/images/cars/icon-3.png" alt="Icon"> 4 Doors</p>
                                </div>
                            </div>
                            <div class="car-buy">
                                <p>$2,000<span>/day</span></p>
                                <a href="cars.html">
                                    <p>Rent Now <i class="fa-solid fa-arrow-right"></i> </p>
                                </a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/cars/orange 1.png" alt="Image">
                            </div>
                            <div class="info">
                                <p>
                                    <i class="fa-solid fa-star"></i> 4.8 <span>(100+Review)</span>
                                </p>
                                <p> Orange-<br> Skoda Kushaq </p>
                                <div class="car-details">
                                    <p><img src="assets/images/cars/icon-1.png" alt="Icon"> 2 passangers</p>
                                    <p><img src="assets/images/cars/icon-2.png" alt="Icon"> Manual </p>
                                    <p><img src="assets/images/cars/icon-4.png" alt="Icon"> Air Conditioning</p>
                                    <p><img src="assets/images/cars/icon-3.png" alt="Icon"> 4 Doors</p>
                                </div>
                            </div>
                            <div class="car-buy">
                                <p>$1,700<span>/day</span></p>
                                <a href="cars.html">
                                    <p>Rent Now <i class="fa-solid fa-arrow-right"></i> </p>
                                </a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="image">
                                <img src="assets/images/cars/red car tata 1.png" alt="Image">
                            </div>
                            <div class="info">
                                <p>
                                    <i class="fa-solid fa-star"></i> 4.8 <span>(100+Review)</span>
                                </p>
                                <p> red-<br> Renault Kiger </p>
                                <div class="car-details">
                                    <p><img src="assets/images/cars/icon-1.png" alt="Icon"> 2 passangers</p>
                                    <p><img src="assets/images/cars/icon-2.png" alt="Icon"> Manual </p>
                                    <p><img src="assets/images/cars/icon-4.png" alt="Icon"> Air Conditioning</p>
                                    <p><img src="assets/images/cars/icon-3.png" alt="Icon"> 4 Doors</p>
                                </div>
                            </div>
                            <div class="car-buy">
                                <p>$1,500<span>/day</span></p>
                                <a href="cars.html">
                                    <p>Rent Now <i class="fa-solid fa-arrow-right"></i> </p>
                                </a>
                            </div>
                        </div>
                        --->
                        <?php }?>
                    </div>
                  
                </div>
               
            </div>
           
            <!--=======================  End Car Section =========================  -->
            <div class="show-all">
                <a href="cars.php">Show All Cars</a>
                <i class="fa-sharp fa-solid fa-arrow-right"></i>
            </div>
        </section>
    </div>
    <!-- -------------------rent deals --------------------- -->

    <!-- ---------------- footer------------------- -->
    <?php include('config/footer.php');  ?>

</body>

</html>
