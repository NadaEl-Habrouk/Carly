
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add Admin </title>
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
          <div class = "text"> Add Admin</div>
        </div>

        <div class="right">
          <h1>Add Admin</h1>
          <form method = "post" >
            <div class="info">
              <label for="firstname">First Name</label>
              <input type="text" name="fname" id="firstname" />
            </div>

            <div class="info">
              <label for="lastname">Last Name</label> 
              <input type="text" name="lname" id="lastname"  />
            </div>

            <div class="info">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" />
            </div>
            <div class="info">
              <label for="email">Password</label>
              <input type="password" name="pass" id="pass" />
            </div>
            

            <div class="info1">
              <input type="submit" value="Add" name="add_admin" />
            </div>

           
          </form>
          <?php
   
  
if (isset($_POST['add_admin'])) {
  include 'config/connect.php';
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $result = $conn->query("INSERT INTO user(first_name,last_name,email,password,is_admin) VALUES ('$fname','$lname','$email','$pass',true)");

    if ($result) {
        echo "<script type = \"text/javascript\">
        alert(\"Admin Added Successfully \");
        window.location = (\"viewAdmin.php\")
        </script>";
    } else {
        echo "<script type = \"text/javascript\">
        alert(\"Fail To Add Admin. Try Again\");
        window.location = (\"viewAdmin.php\")
        </script>";
    }
}
            ?>   
            
  </body>
</html>
