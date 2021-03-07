
<?php
include('connection.php');
?>
<style type="text/css">
  td{
    width: 200px;
    height: 20px;
    
  }
</style>
<!DOCTYPE html>
<html>
<body>
<div class="full">
    <div id="inner_full">
  <center> <h1><u>Order Details</u></h1></center>
  <center><div id="form" style="background-color: blue;width: 70%;height: 250px;color: white;border-radius: 10px;margin-bottom: 130px;">
      <table>
     <tr style="font-size: 20px;">
     <td><center><b><font color="red">id</font></b></center>
     <td><center><b><font color="red">CName</font></b></center>
      <td><center><b><font color="red">CRDNumber</font></b></center>
      <td><center><b><font color="red">ExpMonth</font></b></center>
      <td><center><b><font color="red">ExpYear</font></b></center>
      <td><center><b><font color="red">CVV</font></b></center>
      </td>
       </tr>
       <?php
       $q=$db->query("SELECT * FROM payment");
       while ($r1=$q->fetch(PDO::FETCH_OBJ))
       {
        ?>
        <tr >
        <td><center><?= $r1->id;?></center></td>
        <td><center><?= $r1->cardname;?></center></td>
        <td><center><?= $r1->cardnumber;?></center></td>
        <td><center><?= $r1->expmonth;?></center></td>
        <td><center><?= $r1->expyear;?></center></td>
        <td><center><?= $r1->cvv;?></center></td>
       
        
      </tr>

        <?php
       } 
        
       ?>
      </table>
      
    </div></center>
     
    </div>
  </div>

</body>
</html>