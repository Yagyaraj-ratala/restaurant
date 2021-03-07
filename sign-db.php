<?php

$db=new PDO('mysql:host=localhost;dbname=restaurant-management-system','root','');

if(isset($_POST['signup']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pno=$_POST['pno'];
$email=$_POST['email'];
$psw=$_POST['psw'];



$s=$db->prepare("INSERT INTO sign(fname,lname,pno,email,psw) VALUES (:fname,:lname,:pno,:email,:psw)");
$s->bindvalue('fname',$fname);
$s->bindvalue('lname',$lname);
$s->bindvalue('pno',$pno);
$s->bindvalue('email',$email);
$s->bindvalue('psw',$psw);
if($s->execute())
{
	header("refresh:1.1; url=./Sign.php");
   echo"<script>alert('signup successful')</script>";
}
else
{
  echo"<script>alert('please this email is already exited try another')</script>";
  
}
}

?>