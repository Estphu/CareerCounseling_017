<?php 
include 'C/connection2.php';
session_start();
if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $query = mysqli_query($con , "SELECT * FROM login WHERE user_name='$user_name' AND password = '$password' ");
    if (mysqli_num_rows($query) == 1) {
      echo "<div class= 'alert alert-success'>Redirecting to pannel.......</div>";
      $_SESSION['username'] = $_POST['user_name'];
      header("Refresh:2 url=admin/index.php" ,true,303);
    }else{
      echo "<script>alert('Ooops! username or password is wrong.')</script>";
    }
}

 ?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Career Guidance System</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="site.html">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/slicknav.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
<link rel="stylesheet" href="assets/css/gijgo.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/animated-headline.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/nice-select.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div id="preloader-active">
<div class="preloader d-flex align-items-center justify-content-center">
<div class="preloader-inner position-relative">
<div class="preloader-circle"></div>
<div class="preloader-img pere-text">
<img src="assets/img/logo/xloder.png.pagespeed.ic.BskQqF9qoV.jpeg" alt="">
</div>
</div>
</div>
</div>

<main class="login-body" data-vide-bg="assets/img/login-bg.mp4">
<form class="form-default" method="POST">
<div class="login-form">

<div class="logo-login">
<a href="index-2.php"><img src="assets/img/logo/xloder.png.pagespeed.ic.BskQqF9qoV.jpeg" alt=""></a>
</div><h2>Login Here</h2>
<div class="form-input">
<label for="name">User Name</label>
<input type="user_name" name="user_name" placeholder="User Name" required>
</div>
<div class="form-input">
<label for="name">Password</label>
<input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
</div>
<div class="form-input pt-30">
<input type="submit" name="submit" value="login">
</div>
</div>
</form>
</main>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
				
<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js%2bbootstrap.min.js%2bjquery.slicknav.min.js%2bjquery.vide.js.pagespeed.jc.Ursr2hTZde.js"></script><script>eval(mod_pagespeed_Z7DMTieVyB);</script>
<script>eval(mod_pagespeed__Z$JXv0HVP);</script>

<script>eval(mod_pagespeed_hKcZ_C8lUN);</script>

<script>eval(mod_pagespeed_aqEnEt3MyS);</script>

<script src="assets/js/owl.carousel.min.js%2bslick.min.js.pagespeed.jc.qd09yuKL_w.js"></script><script>eval(mod_pagespeed_nOFW1B0EyG);</script>
<script>eval(mod_pagespeed_genO7Vo23O);</script>

<script src="assets/js/wow.min.js%2banimated.headline.js%2bjquery.magnific-popup.js.pagespeed.jc.k8P6GO8fRU.js"></script><script>eval(mod_pagespeed_OeQ4lnaGcF);</script>
<script>eval(mod_pagespeed_5e1Nqqi059);</script>
<script>eval(mod_pagespeed_MJRsdSgld4);</script>

<script src="assets/js/gijgo.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.sticky.html"></script>

<script src="assets/js/jquery.barfiller.js"></script>

<script src="assets/js/jquery.counterup.min.html"></script>
<script src="assets/js/waypoints.min.html"></script>
<script src="assets/js/jquery.countdown.min.html"></script>
<script src="assets/js/hover-direction-snake.min.html"></script>

<script src="assets/js/contact.js%2bjquery.form.js%2bjquery.validate.min.js%2bmail-script.js%2bjquery.ajaxchimp.min.js%2bplugins.js%2bmain.js.pagespeed.jc.xsoTmmHN0W.js"></script><script>eval(mod_pagespeed_l7r7vYoeuQ);</script>
<script>eval(mod_pagespeed_72e81481T_);</script>
<script>eval(mod_pagespeed_$D6ZXM_Mzx);</script>
<script>eval(mod_pagespeed_GDuFlPziwn);</script>
<script>eval(mod_pagespeed_LUClZXv1ZM);</script>

<script>eval(mod_pagespeed_zaBzT_lTD2);</script>
<script>eval(mod_pagespeed_qZYKaaW6uC);</script>
<script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"65232b97b81cca80","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.1","si":10}'></script>
</body>
</html>