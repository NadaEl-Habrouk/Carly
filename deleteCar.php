<?php
include('config/connect.php');
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM car WHERE car_id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo "<script type = \"text/javascript\">
      alert(\"Car Deleted Successfully \");
      window.location = (\"viewCars.php\")
      </script>";
    } else {
        echo "<script type = \"text/javascript\">
      alert(\"Fail To Delete Car. Try Again\");
      window.location = (\"viewCars.php\")
      </script>";
    }
}
?>
