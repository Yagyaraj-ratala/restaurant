<?php
	session_start();
	$db=new PDO('mysql:host=localhost; dbname=restaurant-management-system','root',''); 
	if(isset($_POST['sign']))      
    {  $uname=$_POST['uname'];    
        $psw=$_POST['psw']; 
         $q=$db->prepare("SELECT * FROM admin where uname='$uname' && psw='$psw'");     
 
		$q->execute(); 
		$res=$q->fetchALL(PDO::FETCH_OBJ); 
		if($res)   
      	{  
      		header("location:adm.php"); 
                  
        }  else 
         {      echo "<script>alert('wrong User')</script>"; 
           } 
            } 
