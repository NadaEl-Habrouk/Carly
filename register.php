<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Main css file -->
    <link rel="stylesheet" href="assets/css/register.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Josefin+Sans&family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/home.css">
	  <link rel="website icon" type="png" href="assets/images/logo-1.png">  

<?php include('config/header2.php');?>


  </head>
  <body>
    
      <div class="box">
        <div class="left">
          <div class="logo">Carly</div>
          <div class="text">Your Register</div>
        </div>

        <div class="right">
          <h1>Sign Up</h1>
          <form action="" method="post">
            <div class="info">
              <label for="firstname">First Name</label>
              <input type="text" name="firstname" id="firstname" />
            </div>

            <div class="info">
              <label for="lastname">Last Name</label>
              <input type="text" name="lastname" id="lastname"/>
            </div>

            <div class="info">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" />
            </div>

            <div class="info">
              <label for="password">Password</label>
              <input type="password" name="password" id="password"/>
            </div>

            <div class="info">
              <label for="confirmpass">Confirm Password</label>
              <input type="password" name="confirmpass"  id = "confirmpass"/>
            </div>

            <div class="info1">
              <input type="submit" value="CreateAccount" name="register" />
            </div>
          </form>

            <?php
           
                if(isset($_POST['register']))
                {
                    include 'config/connect.php';

                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $confirmpass = $_POST["confirmpass"];

                   $query = "select email from user where email='$email'";
                   $res = $conn->query($query);

                    if ($res->num_rows){echo "<br>** This Email Is uesed<br><br>";}
                    else if($password != $confirmpass){echo "<br>** Password Does Not Match<br><br>";}
                    else
                    {
                        $query = "insert into user(is_admin, email, password, first_name, last_name)
                                            values(false, '$email', '$password', '$firstname','$lastname')";

                        $result = $conn->query($query);

                        if($result){
                            echo "<script type = \"text/javascript\">
								alert(\"Successfully Registered.\");
								window.location = (\"login.php\")
								</script>";
                        }
                        else{
                            echo "<script type = \"text/javascript\">
								alert(\"Registration Failed. Try Again\");
								window.location = (\"signup.php\")
								</script>";
                        }
                    }
                }
            ?>
          <div class="login">
            Already Have Account ?
            <a href="login.php">login here</a>
          </div>
        </div>
      </div>
<?php include('config/footer.php');?>
  </body>
</html>
