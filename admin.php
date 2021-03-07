<?php
include('admin-db.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/portnav.css"> 
    <link rel="stylesheet" href="css/admin.css"> 
  </head>
  <body>
    <nav>
        <a href="index.php"><img src="images/logo.png" height="96" width="152"></a>
        <ul>
          <li><a href="index.php" onmouseover="onm.play()", onmousedown="onc.play()">Home</a></li>
          <li><a href="about.php" onmouseover="onm.play()", onmousedown="onc.play()">About</a></li>
          <li><a href="Contact.php" onmouseover="onm.play()", onmousedown="onc.play()">Contact
          </a></li>
          <li><a href="Sign.php" onmouseover="onm.play()", onmousedown="onc.play()">Register
          </a></li>
        </ul>
      </nav>
    <a href="#"><img class="admin" src="images/Admin.gif" height="100" width="550"></a>

<div class="login-box">
  <h1>Admin Login</h1>
  <form action="admin-db.php" method="Post">
          
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="uname">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn" value="Sign in" name="sign" >login</button>
</div>
  </body>
  <script type="text/javascript" src="js/Beep.js"></script> 
</form>
</html>


