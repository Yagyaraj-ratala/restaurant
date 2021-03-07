<?php 
session_start();
$con=new PDO('mysql:host=localhost;dbname=restaurant-management-system','root','');
$q1=$con->query("SELECT * FROM  checkout");
?>

<!DOCTYPE html>
<html>
<center> <h2 style="color: red">Restaurant Management system</h2> </center>
<body style="background-color:yellow;">
  <a style="color: blue;margin-top:-5px;">
  <center> <h2>Billing Details</h2> <div id="header" style="height:20px;width:40%"></center>
  
</a>
</br>
<div id="templatemo_main">
  <center><table width="913" height="38" border="1">
    <tr>
      <th width="100" scope="col"> ID</th>
      <th width="89" scope="col">CustomerName</th>
      <th width="102" scope="col">Item</th>
      <th width="108" scope="col">Quantity</th>
      <th width="159" scope="col">Address </th>
      <th width="70" scope="col">City</th>
      <th width="70" scope="col">State</th>
      <th width="70" scope="col">Zip</th>
    </tr>
    <?php 
 while($r1=$q1->fetch(PDO::FETCH_OBJ))
    {
echo " <tr>
     <td>&nbsp;$r1->id</td>
     <td>&nbsp;$r1->firstname</td>   
     <td>&nbsp;$r1->item</td>
     <td>&nbsp;$r1->qty</td>
     <td>&nbsp;$r1->address</td>
     <td>&nbsp;$r1->city</td>
     <td>&nbsp;$r1->state</td>
     <td>&nbsp;$r1->zip</td>
    
    </tr>";
    }
   ?>
  </table></center>
  <span class="main_top"></span>
  <div id="templatemo_content"></div><!-- end of content -->

  <div class="cleaner"></div>
</div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
</body>
</html>