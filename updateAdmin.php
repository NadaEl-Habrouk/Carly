<?php
     include('config/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Update Admin </title>
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
        <?php

            if(isset($_POST['update_btn']))
            {
                $id = $_POST['update_id'];
                
                $query = "SELECT * FROM user WHERE user_id='$id' ";
                $query_run = mysqli_query($conn, $query);

                foreach($query_run as $row)
                {
                    ?>


      <div class="box">
        <div class="left">
          <div class="logo">Carly</div>
          <div class = "text"> Update Admin</div>
        </div>

        <div class="right">
          <h1>Update Admin</h1>
          <form method = "post">
            <input type="hidden" name = "update_id" value = "<?php echo $row['user_id']?>" >
            <div class="info">
              <label for="firstname">First Name</label>
              <input type="text" name="update_fname" value = "<?php echo $row['first_name']?>" />
            </div>

            <div class="info">
              <label for="lastname">Last Name</label> 
              <input type="text" name="update_lname" value = "<?php echo $row['last_name']?>"  />
            </div>

            <div class="info">
              <label for="email">Email</label>
              <input type="text" name="update_email" value = "<?php echo $row['email']?>" />
            </div>
            <div class="info">
              <label for="pass">Password</label>
              <input type="password" name="update_password" value = "<?php echo $row['password']?>" />
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
if (isset($_POST['updatebtn'])) {
    $id = $_POST['update_id'];
    $fname = $_POST['update_fname'];
    $lname = $_POST['update_lname'];
    $email = $_POST['update_email'];
    $password = $_POST['update_password'];

    $query = "UPDATE user SET first_name='$fname',last_name = '$lname' , email='$email', password='$password' WHERE user_id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo "<script type = \"text/javascript\">
      alert(\"Admin Updated Successfully \");
      window.location = (\"viewAdmin.php\")
      </script>";
    } else {
        echo "<script type = \"text/javascript\">
      alert(\"Fail To Update Admin. Try Again\");
      window.location = (\"viewAdmin.php\")
      </script>";
    }
}
?>
        
        </div>
    </div>
</div>

</div>
