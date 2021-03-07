
<?php

$db=new PDO('mysql:host=localhost;dbname=restaurant-management-system','root','');

if(isset($_POST['submit']))
{
$cardname=$_POST['cardname'];
$cardnumber=$_POST['cardnumber'];
$amt=$_POST['amt'];
$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];
$cvv=$_POST['cvv'];
$s=$db->prepare("INSERT INTO  payment(cardname,cardnumber,amt,expmonth,expyear,cvv) VALUES(:cardname,:cardnumber,:amt,:expmonth,:expyear,:cvv)");
$s->bindvalue('cardname',$cardname);
$s->bindvalue('cardnumber',$cardnumber);
$s->bindvalue('amt',$amt);
$s->bindvalue('expmonth',$expmonth);
$s->bindvalue('expyear',$expyear);
$s->bindvalue('cvv',$cvv);
if($s->execute())
{
	header("refresh:1.1; url=./menu.php");
	echo"<script>alert('Successfully Trasaction completed...')</script>";
}
else
{
  echo"<script>alert('failed')</script>";
  
}
}

?>