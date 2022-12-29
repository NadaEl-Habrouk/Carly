
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




    <!--=================== The github link =====================  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--   Main CSS File    -->
    <link rel="stylesheet" href="assets/css/feedback.css">

    <link rel="stylesheet" href="assets/css/home.css">


    <title>Feedback</title>

</head>

<body>
<?php 
 include 'config/connect.php';
include('config/header2.php');?>

    <!-- ========================= Start Feedback Section ========================= -->

    <div class="feedback">
        <div class="feed-f1">
            <div class="image">
                <img src="assets/images/feedback 1.png" alt="Image">

            </div>
            <div class="text">
                <span class="s1"></span> Feedback<span class="s2"></span>
            </div>
        </div>
       


        <div class="container">
            <div class="feed-f2">
                <div class="text"> Give us your feedback </div>
                <form action="" method="post">
                    <input type="email" id="name" required placeholder="Email" name="email">
                    <input type="text" id="name" required placeholder="Type Your Massage" name="mesg">
                    <input type="submit" value="Send" name="send">
                </form>
                <?php
              
if (isset($_POST["send"])) 
{
    $user_id=$_SESSION['id'];
    $mesg = $_POST['mesg'];
    $email = $_POST['email'];

                            $result = $conn->query("INSERT INTO feedback(user_id,email, message) VALUES ('$user_id','$email', '$mesg') ");
                        if($result){
                            // $user_id = $conn->insert_id;
                            // $sql = "INSERT INTO user (user_id) VALUE ('$user_id')";
                           
                          
                         echo "<script type = \"text/javascript\">
											alert(\"Message Successfully Send\");
											window.location = (\"feedback.php\")
											</script>";
                        } else{
                            echo "<script type = \"text/javascript\">
											alert(\"Message Not Send. Try Again\");
											window.location = (\"feedback.php\")
											</script>";
                        }
                    }
                  
                ?>
            </div>
        </div>

    </div>
    <!-- ========================= End Feedback Section ========================= -->
    <?php include('config/footer.php');?>

</body>

</html>