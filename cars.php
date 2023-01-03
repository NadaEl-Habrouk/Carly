<!---
include("config/connect.php");
$sql = "SELECT * FROM `car` ";
$all_cars = $conn->query($sql); 

-->
<?php
include('config/connect.php');
$sql = "SELECT * FROM car";
$all_car = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Render All Elements Nortmally  -->
    <link rel="stylesheet" href="assets/css/normalize.css">

    <!------    Bootstrap  --------->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!------    Font Awesome Library--------->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="css/all.css">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!--         Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">


    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--=================== The github link =====================  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--   Main CSS File    -->
    <link rel="stylesheet" href="assets/css/cars.css" >
    <link rel="stylesheet" href="assets/css/car.css" >
     <link rel="website icon" type="png" href="assets/images/logo-1.png">   






    <title>Cars</title>
</head>

<body>
    <!--------------------- start navbar---------------------- -->
<?php include('config/header2.php') ?>
    <!-- -------------------End navbar-------------------------- -->

    <!--=======================  Start Car Section =========================  -->
    <div class="car">
                <div class="container">
                <h2>All Vechicals </h2>
              
                    <div class="cars">
                    <?php
while ($row = mysqli_fetch_assoc($all_car)) {
    ?>
                      <div class="box">
                            <div class="image">
                                <img src="<?php echo $row['car_image']?>" alt="Image">
                            </div>
                            <div class="info">
                                <p>
                                    <i class="fa-solid fa-star"></i> 4.8 <span>(100+Review)</span>
                                </p>
                                <p> <?php echo $row['color']?><br><?php echo $row['car_name']?> </p>
                                <div class="car-details">
                                    <p><img src="assets/images/cars/icon-1.png" alt="Icon"> <?php echo $row['steats_number']?> passangers</p>
                                    <p><img src="assets/images/cars/icon-2.png" alt="Icon"> <?php echo $row['status']?> </p>
                                    <p><img src="assets/images/cars/icon-4.png" alt="Icon"><?php echo $row['is_air_conditioned']?> Air Conditioning</p>
                                    <p><img src="assets/images/cars/icon-3.png" alt="Icon"><?php  echo $row['door_num']?>  Doors</p>
                                </div>
                            </div>
                            <div class="car-buy">
                                <p>$<?php echo  $row['renting_price']?><span>/day</span></p>

                            </div>
                            
                        </div>
                        <?php
}
                        ?>
                        </div>
                       
                        </div>
                        </div> 
                     
          
                
                 
    
   
       

    <!--=======================  End Car Section =========================  -->
    <!--=======================  Start book Section =========================  -->
    <div class="book" id="book">
        <div class="container">
        <p class="text">
                Book A Car
            </p>
            <form  method="post">
                <div class="form-1">
                    <div class="box">
                        <label for="name">Name </label>
                        <input type="text" id="name"  name="name">
                    </div>
                    <div class="box">
                        <label for="email">Email </label>
                        <input type="email" id="email"  name="email">
                    </div>

                    <div class="box">
                        <label for="phone">phone </label>
                        <input type="tel" id="phone"  name="phone" minlength="11" maxlength="11">
                    </div>
                    <div class="box">
                        <label for="na_id">National ID </label>
                        <input type="tel" id="na_id"  name="n_id" minlength="14" maxlength="14">
                    </div>


                    <div class="box">
                        <label for="image" > Driving License Image </label>
                        <input type="text" id="image"  name="image">
</div>
             


                    <div class="box">
                        <label for="choose">Choose A Car </label>
                        <div class="sle">
                            <select name="car" id="choose" required>
                                <option selected disabled></option>

                                <option value=" Dark Metal Gray- Nissan Qashqai"> Dark Metal Gray- Nissan Qashqai</option>
                   
                                <option value="White- Nissan Sentra 2017">White- Nissan Sentra 2017</option>
                                <option value="Orange- Skoda Kushaq">Orange- Skoda Kushaq</option>
                                <option value="red- Renault Kiger">red- Renault Kiger</option>

                                <option value="Yellow- Merceds_Benz AMG">Yellow- Merceds_Benz AMG</option>
                                <option value="White- Mahindra Bolero">White- Mahindra Bolero</option>
                                <option value="blue- Nissan Magnite">blue- Nissan Magnite</option>
                                <option value="red- Tata Altroz">red- Tata Altroz</option>

                                <option value="Black- Kia 2021">Black- Kia 2021</option>
                                <option value="Orange- Suzukiswift 2022">Orange- Suzukiswift 2022</option>
                                <option value="Green- Hendy Ford Chichester">Green- Hendy Ford Chichester</option>
                                <option value="Blue- Skoda Fabia">Blue- Skoda Fabia</option>

                            </select>
                        </div>
                    </div>

                    <div class="box">
                        <label for="address">Address </label>
                        <input type="text" id="address"  name="add">
                    </div>
                </div>


                <div class="form-2">
                    <div class="box">
                        <label for="sdate">Start Date </label>
                        <input type="date" id="sdate"  name="s_date">
                    </div>
                    <div class="box">
                        <label for="edate">End Date </label>
                        <input type="date" id="edate"  name="e_date">
                    </div>
                    <div class="box">
                        <input type="submit" value="Book Now" name="submit">

                    </div>
                </div>
            </form>
           
        </div>
    </div>
    <?php
if (isset($_POST['submit'])) 
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $image = $_POST['image'];
    $n_id = $_POST["n_id"];
    $car = $_POST["car"];
    $add = $_POST["add"];
    $s_date = date('Y-m-d', strtotime($_POST["s_date"]));
    $e_date =date('Y-m-d', strtotime($_POST["e_date"]));
    $user_id=$_SESSION['id'];

    $sql = "INSERT INTO booking(name,email,phone,dl_image,national_id,car_name,address,start_date,end_date,user_id) VALUES ('$name','$email','$phone','$image','$n_id','$car','$add','$s_date','$e_date','$user_id')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script type = \"text/javascript\">
        alert(\"Booking is Successfully \");
        window.location = (\"cars.php\")
        </script>";
    } else {
        echo "<script type = \"text/javascript\">
        alert(\"Fail To Book. Try Again\");
        window.location = (\"cars.php\")
        </script>";
    }
}
?>
   
    <!--=======================  End book Section =========================  -->
<!-- ---------------- footer------------------- -->
<?php include('config/footer.php');  ?>
<!-- ---------------- footer------------------- -->




    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/all.js"></script>

</body>

</html>
