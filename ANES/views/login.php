<?php 
 include'header.php' 
 ?>
<html lang="en">
  <head>
    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main2.css">
    <link rel="stylesheet" href="css/linearicons2.css">
    <link rel="stylesheet" href="css/themify-icons2.css">

    
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  </head>
    <body>
   

    <!-- END nav -->

    <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread">Gym Trainer</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>LOGIN</span></p>
          </div>
        </div>
      </div>
    </section>
      
     
    

       <div>
      <br>
<br>
<br>
    <br>
<br>
<br>
<div class="container-login100" >
      <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
        <form  id ="form" class="login100-form validate-form"  method="POST" action="../Core/check_acc.php">
          <span class="login100-form-title p-b-55">
            Login
          </span>

          <div class="wrap-input100 validate-input m-b-16" >
            <input class="input100" type="text" name="email" id="mail" required placeholder="Email address or user name">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
               
              <span class="lnr lnr-envelope"></span>
               
            </span>
          </div>
           <span class="check_ok" style="color:#149541; font-size:1em;"></span>
      <span class="check_false"  style="color:#F55 ; font-size:1em;"></span>
           <span id='email'></span><br>
           
          <div class="wrap-input100 validate-input m-b-16" >
            <input class="input100" type="password" name="pass" id="pass" required placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>
          </div>
             <span class="check_ok1" style="color:#149541; font-size:1em;"></span>
      <span class="check_false1"  style="color:#F55 ; font-size:1em;"></span>
          <div class="contact100-form-checkbox m-l-4">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Remember me
            </label>
          </div>
          
          <div class="container-login100-form-btn p-t-25">
            <button class="login100-form-btn" id="login">
              Login
            </button>
          </div>

          <div class="text-center w-full p-t-42 p-b-22">
            <span class="txt1">
              Or login with
            </span>
          </div>

          <a href="#" class="btn-face m-b-10"   onclick="document.getElementById('myImage').src='https://scontent.ftun9-1.fna.fbcdn.net/v/t1.0-9/40814677_2030802393638565_2055325284894244864_n.jpg?_nc_cat=104&_nc_ht=scontent.ftun9-1.fna&oh=4eae2b665c46b91d4e72bb9011c0b12d&oe=5CE3CD64'">
            <i class="fa fa-facebook-official"></i>
            Facebook
          </a>

          <a href="#" class="btn-google m-b-10">
            <img src="images/icons/icon-google.png" alt="GOOGLE">
            Google
          </a>

          <div class="text-center w-full p-t-115">
            <span class="txt1">
              Not a member?
            </span>

            <a class="txt1 bo1 hov1" href="form.html">
              Sign up now             
            </a>
          </div>
        </form>
      

          

    </div>
  </div>


   </section>
<br>
<br>
    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
     


 
  
  </body>
</html>