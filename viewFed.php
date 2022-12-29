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

</style>
<div >
  <h2>All Feedbacks</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Email </th>
        <th class="text-center">Message</th>
       
      </tr>
    </thead>
    <?php
  include "config/connect.php";
        $sql="SELECT * from feedback";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["email"]?> </td>
      <td><?=$row["message"]?></td>
      
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>