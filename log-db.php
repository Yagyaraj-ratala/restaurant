<?php
session_start();
 $db=new PDO('mysql:host=localhost;dbname=restaurant-management-system','root',''); 
if(isset($_POST['login']))      
    {  $email=$_POST['email'];    
        $psw=$_POST['psw']; 
         $q=$db->prepare("SELECT * FROM sign where email='$email' && psw='$psw'");     
 
   $q->execute(); 
     $res=$q->fetchALL(PDO::FETCH_OBJ); 
      if($res)   
      	{    
      header("location:menu.php"); 
        }  else 
         {      echo "<script>alert('wrong User')</script>"; 
           } 
            } 
            ?> 