<?php
session_start();
if(isset($_SESSION['tid']) && isset($_SESSION['pwd']))
{
?>
<!DOCTYPE html>

<html lang="">
<head>
<title>Teacher</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div  style="background-image:url('images/demo/backgrounds/01.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Teacher</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" >Bus</a>
            <ul>
              <li><a href="viewbuses.php">View Bus</a></li>
              <li><a href="busrequest.php">Bus Request</a></li>
              <li><a href="viewbusreq.php">Cancellation</a></li>
<!--              <li><a href="payment.php">Payment</a></li> -->
              
            </ul>
          </li>
          <li><a  href="editprofile.php">Edit Profile</a>
           
          </li>
          <li><a href="logout.php">Logout</a></li>
          
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
        
          </article>
        </li>
        <li>
          <article>
            <p>Laoreet</p>
            <h3 class="heading">Iaculis interdum</h3>
            <p>Nulla scelerisque posuere convallis</p>
            <footer>
              <form class="group" method="post" action="#">
                <fieldset>
                  <legend>Sign-Up:</legend>
                  <input type="email" value="" placeholder="Email Here&hellip;">
                  <button class="fa fa-sign-in" type="submit" title="Submit"><em>Submit</em></button>
                </fieldset>
              </form>
            </footer>
          </article>
        </li>
        <li>
       
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper">
  <div class="hoc clear"> 
    <!-- ################################################################################################ -->
    <figure id="introblocks">
      <ul class="nospace group">
        <li class="one_third first"><a href="#"><img src="images/demo/one.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="images/demo/two.jpg" alt=""></a></li>
        <li class="one_third"><a href="#"><img src="images/demo/three.jpg" alt=""></a></li>
      </ul>
    </figure>
  
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ --><!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ --><!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ --><!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5"></div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>

<?php
}
else
{
	echo "<h1 align='center'>Please Login!</h1>";
	echo "<center><a href='../teacherlogin.php'>Login Here!</a></center>";
}
?>