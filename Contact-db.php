<?php

$db=new PDO('mysql:host=localhost;dbname=restaurant-management-system','root','');

if(isset($_POST['send']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pno=$_POST['pno'];
$query=$_POST['query'];



$s=$db->prepare("INSERT INTO contact(fname,lname,email,pno,query) VALUES (:fname,:lname,:email,:pno,:query)");
$s->bindvalue('fname',$fname);
$s->bindvalue('lname',$lname);
$s->bindvalue('email',$email);
$s->bindvalue('pno',$pno);
$s->bindvalue('query',$query);
if($s->execute())
{
	header("refresh:1.1; url=./index.php");
   echo"<script>alert('thank you for your contact')</script>";
}
else
{
  echo"<script>alert('failed')</script>";
  
}
}

?>