<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="x-UA-compatiable" content="ie=edge">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style >
	
    body{
    	background:lightblue;
    }
    .nav-container{
    	position: absolute;
    	top: 60%;
    	transform: translateY(-50%);

    }
    .nav-container a{
    	display: block;
    	text-decoration: none;
    	background: #fff;
    	color: #e74c3c;
    	text-transform: uppercase;
    	padding: 15px 0 20px 10px;
    	margin: 10px;
    	width: 290px;
    	letter-spacing: 1.5px;
    	box-shadow: 2px 2px 16px 0px rgba(0,0,0,0.75);
    	position: relative;
    	margin-left: -17px;
    	transition: 0.7s ease;
    }
    .nav-container a span{
    	float: right;
    	width: 70px;
    	height: 100%;
    	line-height: 50px;
    	text-align: center;
    	color: black;
    	background: red;
    	position: absolute;
    	right: 0;
    	top: 0px;


    }
    .nav-container a span i{
    	font-size: 20px;

    }
    .nav-container a:hover{
    	margin-left: 0px;
    }
      .slider{
    width:76%;
    height: 435px;
    position: absolute;
    left: 23%;
    top: 27%;
    box-sizing:border-box;
    box-shadow: 5px 5px 10px  black;
    
  }
 img{
  width: 100%;
 height: 90%;

 }
 
    
</style>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
	 
	<div class="full">
		<div id="inner_full">
	<div id="header" style="background-color:blue;color:white;width:100%;height:50px;text-align:center;"><h2><a href="adminhome.php" style="text-decoration: none;color: white;"> Restaurant Mangement System</a></h2></div>
			<div id="body">
	
	<h1 align="center">WELCOME ADMIN</h1><br>
	<body>
   <img class="admin" src="images/admin-panel.jpg">

  </body>
	 <div class="nav-container">
     	<a href="customer-tbl.php" style="color: black;"><b>Customer Details<span><i class="fa fa-list"></i></span></b></a>
     	<a href="reserve-db.php" style="color: black;" ><b>Reservations Details<span><i class="fa fa-square"></i></span></b></a>
     	<a href="myorders-tbl.php" style="color: black;"><b>Order Details<span><i class="fa fa-minus-square"></i></span></b></a>
     	<a href="check-tb.php" style="color: black;"><b>Billing Details<span><i class="fa fa-film"></i></span></b></a>
      <a href="mycontact-tbl.php" style="color: black;"><b>Contact Details<span><i class="fa fa-film"></i></span></b></a>
      <a href="pay-tb.php" style="color: black;"><b>pay Details<span><i class="fa fa-film"></i></span></b></a>
     	<a href="index.php" style="color: black;"><b>LOGOUT<span><i class="fa fa-power-off"></i></span></b></a>
	
	
</div>
			</div><br><br><br>
			
		</div>
	</div>

</body>
</html>