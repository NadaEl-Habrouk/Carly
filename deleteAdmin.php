<?php
include('config/connect.php');
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM user WHERE user_id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo "<script type = \"text/javascript\">
        alert(\" Admin deleted Successfully \");
        window.location = (\"viewAdmin.php\")
        </script>";
    } else {
    echo "<script type = \"text/javascript\">
        alert(\"Fail To Delete. Try Again\");
        window.location = (\"viewAdmin.php\")
        </script>";
}
}
?>
