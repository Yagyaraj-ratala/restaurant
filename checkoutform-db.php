
<?php

$db=new PDO('mysql:host=localhost;dbname=restaurant-management-system','root','');

if(isset($_POST['sub']))
{
$firstname=$_POST['firstname'];
$item=$_POST['item'];	
$qty=$_POST['qty'];	
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];

$s=$db->prepare("INSERT INTO  checkout(firstname,item,qty,address,city,state,zip) VALUES(:firstname,:item,:qty,:address,:city,:state,:zip)");
$s->bindvalue('firstname',$firstname);
$s->bindvalue('item',$item);
$s->bindvalue('qty',$qty);
$s->bindvalue('address',$address);
$s->bindvalue('city',$city);
$s->bindvalue('state',$state);
$s->bindvalue('zip',$zip);
if($s->execute())
{

  header("location:paymentform.php");
  
}
else
{
  echo"<script>alert('failed')</script>";
  
}
}

?>