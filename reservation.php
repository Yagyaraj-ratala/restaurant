
<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Reservation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/animate-reservation.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" type="text/css" href="css/portnav.css"> 
    <link rel="stylesheet" href="css/reservation.css">
  </head>
  <body>
    <div class="contain">
      <nav>
        <a href="index.php"><img src="images/logo.png" height="96" width="152"></a>
        <ul>
          <li><a href="index.php" onmouseover="onm.play()", onmousedown="onc.play()">Home</a></li>
          <li><a href="about.php" onmouseover="onm.play()", onmousedown="onc.play()">About</a></li>
          <li><a href="Contact.php" onmouseover="onm.play()", onmousedown="onc.play()">Contact
          </a></li>
          <li><a href="Sign.php" onmouseover="onm.play()", onmousedown="onc.play()">Register
          </a></li>
          <li><a href="admin.php" onmouseover="onm.play()", onmousedown="onc.play()">Admin
          </a></li>
        </ul>
        </ul>
      </nav>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Make a Reservation</h2>
          </div>
        </div>
        <form action="" method="post">
        <div class="row d-flex" >
          <div class="col-md-4 ftco-animate img" style="background-image: url(images/reservation.jpg);"></div>
          <div class="col-md-8 ftco-animate makereservation p-5 bg-light">
            <form action="" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="Your Name" required="Full Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Your Email" required ="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" class="form-control" name="pno" minlength="10" maxlength="13" placeholder="Phone" required="Phone Number">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Date</label>
                    <input type="Date" class="form-control" id="book_date" name="dt" placeholder="Date" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Time</label>
                    <input type="Time" class="form-control" id="book_time" name="tm" placeholder="Time" required="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Person</label>
                    <input type="person" class="form-control" id="book_time" minlength="1" maxlength="1" name="person" placeholder="person" required="">
                   </div>
                    </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <input type="submit" name="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
            </form>
            <?php

$db=new PDO('mysql:host=localhost;dbname=restaurant-management-system','root','');

if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$pno=$_POST['pno'];
$dt=$_POST['dt'];
$tm=$_POST['tm'];
$person=$_POST['person'];


$s=$db->prepare("INSERT INTO reservation(fname,email,pno,dt,tm,person) VALUES (:fname,:email,:pno,:dt,:tm,:person)");
$s->bindvalue('fname',$fname);
$s->bindvalue('email',$email);
$s->bindvalue('pno',$pno);
$s->bindvalue('dt',$dt);
$s->bindvalue('tm',$tm);
$s->bindvalue('person',$person);
if($s->execute())
{
   echo"<script>alert('your reservation done successfully')</script>";
}
else
{
  echo"<script>alert('failed')</script>";
  
}
}

?>
          </div>
        </div>
      </div>
    </section>
  <script src="js/min.js"></script>
  <script src="js/migrate-3.0.1.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/stellar.min.js"></script>
  <script src="js/handsome.js"></script>
  <script src="js/popup.min.js"></script>
  <script src="js/bootstrap-aos.js"></script> 
  <script src="js/timepicker.js"></script>
  <script type="text/javascript" src="js/Beep.js"></script> 
  <script src="js/bootstrap-main.js"></script>
    </body>
</html>