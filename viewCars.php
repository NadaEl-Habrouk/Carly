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
    padding: 15%;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
.btn-secendary:hover{
    background-color: #34e24c;
} 
.btn-danger{
    background-color: #af4929;
    padding: 15%;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
.btn-danger:hover{
    background-color: #e24e34;
}

  

</style>
<div >
  <h2>All Cars</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Car Image</th>
        <th class="text-center">Car Name</th>
        <th class="text-center">Color</th>
        <th class="text-center">Renting Price</th>
        <th class="text-center">Steats Num</th>
        <th class="text-center">Status</th>
        <th class="text-center">Air Condition</th>
        <th class="text-center">Door Num</th>

        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "config/connect.php";
      $sql="SELECT * from car";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='<?=$row["car_image"]?>'></td>
      <td><?=$row["car_name"]?></td>
      <td><?=$row["color"]?></td> 
      <td><?=$row["renting_price"]?></td> 
      <td><?=$row["steats_number"]?></td> 
      <td><?=$row["status"]?></td> 
      <td><?=$row["is_air_conditioned"]?></td> 
      <td><?=$row["door_num"]?></td> 
      <td>  
        <form action="updateCar.php" method = "post">
          <input type="hidden" name = "update_id" value = "<?php echo $row['car_id']?>"  >
          <button type = "submit" name = "update_btn" class = "btn btn-secendary"> Update</button>

        </form>
        </td>
              
      <td>  
        <form action="deleteCar.php" method = "post">
          <input type="hidden" name = "delete_id" value = "<?php echo $row['car_id']?>"  >
          <button type = "submit" name = "delete_btn" class = "btn btn-danger"> Delete</button>

        </form>
        </td>
              
    </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>
<td>  
        <form action="addCar.php" method = "post">
          <button type = "submit" name = "add_btn" class = "btn btn-primary"> Add</button>

        </form>
        </td>
              