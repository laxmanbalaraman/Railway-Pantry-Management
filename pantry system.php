<?php session_start(); ?>
<html>
  <head>
    <title>Homepage - railway Pantry system</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/pantry system.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/e4eecd86d3.js" ></script>
    <link rel="icon"
      type="image/png"
      href="https://img.icons8.com/ios-glyphs/30/000000/cook-male.png">
  </head>
  <body>
    <nav class="navbar" id="navbar">
    <ul>
    <li><a class="active" href="pantry system.php"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="order.php"><i class="fa fa-cutlery"></i>order</a></li>
    <li><a href="#order"><i class="fa fa-shopping-cart" aria-hidden="true"></i>your cart</a></li>
    <li><a href="#about"><i class="fa fa-question-circle"></i>About</a></li>
    <li><a href="#services"><i class="fas fa-concierge-bell"></i></i>Our services</a></li>
    <li><a href="#contact"><i class="fa fa-phone"></i>Contact</a></li>
    <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i><?php if(isset($_SESSION["username"])){echo "Sign out";} else{echo "sign in";} ?></a></li>
    <li style="color:white;" ><?php
     if(isset($_SESSION["username"]))
     { echo "Welcome " .$_SESSION["username"];}
      ?></li>
  </ul>
</nav>
    <div class="intro" id="home">
      <h1 style="margin:0; padding-top:300px; font-size:50px;">Railway pantry system</h1>
    <a href="order.php" ><button class="btn" type="button" >Order now</button></a>
      <div class="gif">
        <a href="#about"> <img src="images/arrow.gif" height="50" width="50" style="margin:100px;" alt=""></a>
      </div>
    </div>
<div class="container" id="about">
  <div class="heading"><center> <h1 >About us</h1> </center>  </div>
<div class="parent" >
  <div class="child-1">
      <img src="images/chef.svg" width="300px" height="300px" alt="">
  </div>
  <div class="child-2">
    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <br><br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
     </p>
  </div>
</div>
</div>
<div class="services" id="services">
    <div class="heading"><center> <h1>Our services</h1> </center>  </div>
  <div class="parent service">
    <div class="flex-1">
      <div class="icon">
        <i class="fas fa-stopwatch"></i>
      </div>
      <div class="caption">
        <h3>Ligtning fast delivery</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="flex-1">
      <div class="icon">
        <i class="fab fa-paypal"></i>
      </div>
      <div class="caption">
        <h3>Virtual payment</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="flex-1">
      <div class="icon">
        <i class="fas fa-map-marked-alt"></i>
      </div>
      <div class="caption">
        <h3>Live order tracking</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="flex-1">
      <div class="icon">
        <i class="fas fa-cart-plus"></i>
      </div>
      <div class="caption">
        <h3>No-minimum order</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</div>
  <div class="contact" id="contact" style="padding:50px;">
        <div class="heading"><center><h1>Contact Us</h1></center></div>
    <div class="parent">
      <div class="flex main" style="width:800px; text-align:center;">
         <h4>Email to us @ : </h4>
        <div class="parent-2" style="display:flex;text-align:center;margin-left:200px;">
          <div class="email" style="background:#4CAF50;border-radius:10px 0 0 10px;">
            <i class="fas fa-envelope" style="font-size:35px; padding:10px; color:white;"></i>
          </div>
          <div class="address" >
            <a href="mailto:contactindianrailwaypantry@gmail.com">contactindianrailwaypantry@gmail.com</a>
          </div>
        </div>
        <div class="">
          <div class="logo">
            <h4 style="margin-top:50px;" >Connect with us on: </h4>
          <ul>
            <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
            <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
            <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
            <li> <a href="#"><i class="fab fa-google-plus-g"></i></a> </li>
          </ul>
            </div>
        </div>
      </div>
      <div class="flex">
        <img src="images/contact.svg" height="400px" width="400px" style="padding:15px;" alt="">
      </div>
    </div>
  </div>
  <div class="footer" style="background:black;">
    <center> <p style="color:white; margin:0;font-size:15px;padding:10px;" >  Railway pantry system 2020 &copy; All rights reserved. Made with  <i class="fas fa-heart" style="color:#4CAF50;"></i>  by 19BCE1105 & 19BCE1460 </p><center>
  </div>
<script type="text/javascript">
window.onscroll = function () {
  var myNav = document.getElementById('navbar');
  if (document.body.scrollTop >= 200 ) {
      myNav.classList.add("nav-colored");
      myNav.classList.remove("nav-transparent");
  }
  else {
      myNav.classList.add("nav-transparent");
      myNav.classList.remove("nav-colored");
  }
};
</script>
  </body>
</html>
