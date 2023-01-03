<?php
     include('config/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Update Password </title>
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
               <link rel="website icon" type="png" href="assets/images/logo-1.png">  
  </head>
  <body>
      <div class="box">
        <div class="left">
          <div class="logo">Carly</div>
          <div class = "text"> Update Password</div>
        </div>

        <div class="right">
          <h1>Update Password</h1>
          <form method = "post">
            <input type="hidden" name = "update_id"  >
           
            <div class="info">
              <label for="email">Email</label>
              <input type="text" name="update_email"  />
            </div>
            <div class="info">
              <label for="pass"> New Password</label>
              <input type="password" name="update_password"  />
            </div>
            

            <div class="info1">
              <input type="submit" value="Update" name="updatebtn" />
            </div>

           
          </form>
                            
                        
<?php
if (isset($_POST['updatebtn'])) {
    $id = $_POST['update_id'];
    $email = $_POST['update_email'];
    $password = $_POST['update_password'];

    $query = "UPDATE user SET password='$password' WHERE email='$email' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo "<script type = \"text/javascript\">
      alert(\"Password Updated Successfully \");
      window.location = (\"login.php\")
      </script>";
    } else {
        echo "<script type = \"text/javascript\">
      alert(\"Fail To Update Password. Try Again\");
      window.location = (\"updatePass.php\")
      </script>";
    }
}
?>
        
        </div>
    </div>
</div>

</div>
