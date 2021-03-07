<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/signUp.css"> 
  <link rel="stylesheet" type="text/css" href="css/portnav.css"> 
</head>

<body>
  <nav>
        <a href="index.php"><img src="images/logo.png" height="96" width="152"></a>
        <ul>
          <li><a href="index.php" onmouseover="onm.play()", onmousedown="onc.play()">Home</a></li>
          <li><a href="about.php" onmouseover="onm.play()", onmousedown="onc.play()">About</a></li>
          <li><a href="Contact.php" onmouseover="onm.play()", onmousedown="onc.play()">Contact
          </a></li>
          <li><a href="admin.php" onmouseover="onm.play()", onmousedown="onc.play()">Admin
          </a></li>
        </ul>
      </nav>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up </h1>
          
          <form action="sign-db.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lname" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
              <label>
                Phone Number<span class="req">*</span>
              </label>
              <input type="Phone" size="13" minlength="10" maxlength="12" name="pno" required="phone no" />
            </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email"  required ="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
          </div>
          
          <div class="field-wrap">
            <label>
               Password<span class="req">*</span>
            </label>
            <input type="password" name="psw" minlength="6" maxlength="10" required ="true" placeholder="password(min. 6 characters)" pattern=".{6,a-z}">
          </div>
          <button type="submit" class="button button-block"/ name="signup">Sign Up</button>

          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="log-db.php" method="post">
          
           <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required="true" placeholder="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
           </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="psw" required="true" maxlength="10" placeholder="password(min. 6 characters)" pattern=".{6,}">
          </div>
          <button class="button button-block"/ name="login">Log In</button>
        
          </form>

        </div>
        
      </div>
      
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/signUp.js"></script>
<script type="text/javascript" src="js/Beep.js"></script>
</body>
</html>
