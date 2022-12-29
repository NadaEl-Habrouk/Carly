<style>
  table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    box-shadow: 0 2px 15px #284678 ;
    border-radius: 12px 12px 0 0;
    margin-bottom: 50px;
  }

  td,
  th {
    padding: 10px 16px;
    text-align: center;
  }

  th {
    background-color: #284678 ;
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
  .btn-primary{
    background-color: #0277bd;
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 1%;
}
.btn-primary:hover{
    background-color: #3742fa;
}
.btn-secendary{
    background-color: #2ba13e;
    padding: 10%;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
.btn-secendary:hover{
    background-color: #34e24c;
} 
      .btn-danger{
    background-color: #af4929;
    padding: 10%;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
.btn-danger:hover{
    background-color: #e24e34;
}



</style>
<div >
  <h2>All Admins</h2>
  
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username </th>
        <th class="text-center">Email</th>
        <th class="text-center" colspan="2">Action</th>

       
      </tr>
    </thead>

    <?php
  include "config/connect.php";
        $sql="SELECT * from user where is_admin=1";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["first_name"]?> <?=$row["last_name"]?></td>
      <td><?=$row["email"]?></td>
      <td>
        <form action="updateAdmin.php" method = "post">
          <input type="hidden" name = "update_id" value = "<?php echo $row['user_id']?>"  >
          <button type = "submit" name = "update_btn" class = "btn btn-secendary"> Update</button>

        </form>
        </td>
      
   

      <td>
        <form action="deleteAdmin.php" method = "post">
          <input type="hidden" name = "delete_id" value = "<?php echo $row['user_id']?>"  >
          <button type = "submit" name = "delete_btn" class = "btn btn-danger"> Delete</button>

        </form>
        </td>
      
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    
    ?>
</div>
</div>
  </table>
  <td>
        <form action="addAdmin.php" method = "post">
          <button type = "submit" name = "add_btn" class = "btn btn-primary"> Add</button>

        </form>
        </td>

      