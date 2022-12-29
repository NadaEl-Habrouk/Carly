<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<!------    Font Awesome Library--------->
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="css/all.css">


<!--         Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Faustina:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">




<!--=================== The github link =====================  -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!--   Main CSS File    -->
<link rel="stylesheet" href="assets/css/login.css">
<link rel="stylesheet" href="assets/css/home.css">

<?php include('config/header2.php');?>


    <title>Log IN</title>
</head>
<body>
    <!--=================== Start Login Section =======================  -->
    <div class="login">
        <div class="text">
                <span>Carly</span>
                <div class="log">Your Login</div>
        </div>
        <div class="log-form">
            <h2>Login</h2>
            <form action="" method="post">
                <div class="box">
                    <label for="name">User Name or Email </label>
                    <input type="text" id="name" name = "email" placeholder="Enter Username" required>
                </div>
                <div class="box">
                    <label for="pass">Password </label>
                    <input type="password" id="pass" name = "pass" placeholder="Enter Password" required>
                </div>
            
                <div class="box">
                    <input type="submit"  value="Login" name = 'login'>
                </div>


            </form>

            <?php



                if(isset($_POST['login']))
                {
                    include 'config/connect.php';
                    $email = $_POST["email"];
                    $pass = $_POST["pass"];

                    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
                    $rs = $conn->query($query);
                    $num = $rs->num_rows;
                    $rows = $rs->fetch_assoc();
                    if($num > 0){
                        $_SESSION['email'] = $rows['email'];
                        $_SESSION['pass'] = $rows['password'];
                        $_SESSION['id']= $rows['user_id'];
                        echo "<script type = \"text/javascript\">
									alert(\"Login Successful.................\");
									window.location = (\"home.php\")
									</script>";
                    } else{
                        echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"login.php\")
									</script>";
                    }


                }

            ?>

          <div class="text-account">
            <span><a href="register.php"> Don’t have account?</a></span>
            <span> <a href="updatePass.php"> Forget password?</a></span>
          </div>
        </div>
    </div>
    <!--=================== End Login Section =======================  -->
    <?php include('config/footer.php');?>

</body>
</html>