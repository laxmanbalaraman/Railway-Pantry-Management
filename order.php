<?php
session_start(); ?>
<html>
  <head>
    <title>Homepage - railway Pantry system</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/order.css">
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
    <li><a href="#order"><i class="fa fa-cutlery"></i>order</a></li>
    <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>your cart</a></li>
    <li><a href="pantry system.php#about"><i class="fa fa-question-circle"></i>About</a></li>
    <li><a href="pantry system.php#services"><i class="fas fa-concierge-bell"></i></i>Our services</a></li>
    <li><a href="pantry system.php#contact"><i class="fa fa-phone"></i>Contact</a></li>
    <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i><?php if(isset($_SESSION["username"])){echo "Sign out";} else{echo "sign in";} ?></a></li>
    <li style="color:white;" ><?php
     if(isset($_SESSION["username"]))
     { echo "Welcome " .$_SESSION["username"];}
      ?></li>
  </ul>
</nav>
  <div class="bg">
    <h1 align="center" >Discover the food your taste buds are craving for</h1>
  </div>
  <div class="parent main-catalog">
    <a href="#breakfast" ><div class="flex">
      <div class="image main">
        <img src="images/idli.jpg" width="250px" height="150px" alt="idli">
      </div>
      <div class="caption">
        <h3 align="center" >Breakfast</h3>
      </div>
    </div></a>
  <a href="#Lunchdinner">  <div class="flex">
      <div class="image main">
        <img src="images/meals.jpg" width="250px" height="150px" alt="idli">
      </div>
      <div class="caption">
        <h3 align="center" >Lunch & Dinner</h3>
      </div>
    </div></a>
    <a href="#starters"><div class="flex">
      <div class="image main">
        <img src="images/soup.jpg" width="250px" height="150px" alt="soup">
      </div>
      <div class="caption">
        <h3 align="center" >Starters</h3>
      </div>
    </div></a>
    <a href="#tandoori" ><div class="flex">
      <div class="image main">
        <img src="images/tandoori.jpg" width="250px" height="150px" alt="tandoori">
      </div>
      <div class="caption">
        <h3 align="center" >Tandoori</h3>
      </div>
    </div></a>
    <a href="#snacks"><div class="flex">
      <div class="image main">
        <img src="images/samosa.jpg" width="250px" height="150px" alt="samosa">
      </div>
      <div class="caption">
        <h3 align="center" >Snacks</h3>
      </div></a>
    </div>
  </div>
  <br>
  <!-- Breakfast SECTION -->
  <div class="breakfast" id="breakfast">
  <div class="heading" ><h1 style="margin:0 0 0 50px;">Breakfast</h1></div>
  <div class="parent sub-catalog">
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">idli</h4>
      </div>
      <div class="image sub">
        <img src="images/idli.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(40, 0)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" align="center" class="foodCost" > &#x20B9;40</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(40, 0)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Dosa</h4>
      </div>
      <div class="image sub">
        <img src="images/dosa.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(50, 1)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" align="center" class="foodCost" > &#x20B9;50</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(50, 1)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">pongal</h4>
      </div>
      <div class="image sub">
        <img src="images/pongal.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(60, 2)"  name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style="padding:13.8px;" class="foodCost"   align="center"> &#x20B9;60</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(60, 2)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">bread</h4>
      </div>
      <div class="image sub">
        <img src="images/bread.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button"  onclick="minus(35, 3)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" class="foodCost" align="center"> &#x20B9;35</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button"  onclick="add(35, 3)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">chapati</h4>
      </div>
      <div class="image sub">
        <img src="images/chapato.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(40, 4)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" class="foodCost"  align="center"> &#x20B9;40</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(40, 4)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--Lunch and Dinner section-->
  <div class="Lunchdinner" id="Lunchdinner">
  <div class="heading" ><h3 style="margin:0 0 0 50px;">Lunch and dinner</h3></div>
  <div class="parent sub-catalog">
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Meals</h4>
      </div>
      <div class="image sub">
        <img src="images/meals.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(100, 5)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" align="center" class="foodCost" > &#x20B9;100</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(100, 5)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Brinji Rice</h4>
      </div>
      <div class="image sub">
        <img src="images/brinji.jpg" height="150px" width="250px" alt="no">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(80, 6)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" align="center" class="foodCost" > &#x20B9;80</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(80, 6)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Tomato Rice</h4>
      </div>
      <div class="image sub">
        <img src="images/trice.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(55, 7)"  name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style="padding:13.8px;" class="foodCost"   align="center"> &#x20B9;55</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(55, 7)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Lemon Rice</h4>
      </div>
      <div class="image sub">
        <img src="images/lrice.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button"  onclick="minus(55, 8)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" class="foodCost" align="center"> &#x20B9;55</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button"  onclick="add(55, 8)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Chicken Biryani</h4>
      </div>
      <div class="image sub">
        <img src="images/cb.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(130, 9)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" class="foodCost"  align="center"> &#x20B9;130</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(130, 9)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
  </div>
  <div  ><h3 style="margin:0 0 0 50px;"></h3></div>
  <div class="parent sub-catalog">
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Paneer Fried rice</h4>
      </div>
      <div class="image sub">
        <img src="images/pfrice.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(110, 10)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" align="center" class="foodCost" > &#x20B9;110</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(110, 10)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Prawn Biryani</h4>
      </div>
      <div class="image sub">
        <img src="images/pb.jpg" height="150px" width="250px" alt="no">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(140, 11)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" align="center" class="foodCost" > &#x20B9;140</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(140, 11)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Bisi Bele Bath</h4>
      </div>
      <div class="image sub">
        <img src="images/bisi.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(70, 12)"  name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style="padding:13.8px;" class="foodCost"   align="center"> &#x20B9;70</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(70, 12)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Naan</h4>
      </div>
      <div class="image sub">
        <img src="images/Naan.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button"  onclick="minus(35, 13)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" class="foodCost" align="center"> &#x20B9;35</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button"  onclick="add(35, 13)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Paneer Butter Masala</h4>
      </div>
      <div class="image sub">
        <img src="images/pbm.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(85, 14)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" class="foodCost"  align="center"> &#x20B9;85</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(85, 14)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--Starters-->
  <div class="starters" id="starters">
  <div class="heading" ><h1 style="margin:0 0 0 50px;">Starters</h1></div>
  <div class="parent sub-catalog">
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Paneer Tikka</h4>
      </div>
      <div class="image sub">
        <img src="images/pt.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(90, 15)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" align="center" class="foodCost" > &#x20B9;90</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(90, 15)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Chicken Soup</h4>
      </div>
      <div class="image sub">
        <img src="images/csoup.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(60, 16)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" align="center" class="foodCost" > &#x20B9;60</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(60, 16)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Mushroom Soup</h4>
      </div>
      <div class="image sub">
        <img src="images/msoup.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(50, 17)"  name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style="padding:13.8px;" class="foodCost"   align="center"> &#x20B9;50</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(50, 17)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Paneer 65</h4>
      </div>
      <div class="image sub">
        <img src="images/p65.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button"  onclick="minus(75, 18)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" class="foodCost" align="center"> &#x20B9;75</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button"  onclick="add(75, 18)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--Tandoori section-->
  <div class="tandoori" id="tandoori">
  <div class="heading" ><h1 style="margin:0 0 0 50px;">Tandoori</h1></div>
  <div class="parent sub-catalog">
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Tandoori Chicken</h4>
      </div>
      <div class="image sub">
        <img src="images/tc.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(200, 19)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" align="center" class="foodCost" > &#x20B9;200</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(200, 19)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Tandoori Momos</h4>
      </div>
      <div class="image sub">
        <img src="images/tm.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(80, 20)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" align="center" class="foodCost" > &#x20B9;80</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(80, 20)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Tandoori Roti</h4>
      </div>
      <div class="image sub">
        <img src="images/tr.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(50, 21)"  name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style="padding:13.8px;" class="foodCost"   align="center"> &#x20B9;50</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(50, 21)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Tandoori paneer Tikka</h4>
      </div>
      <div class="image sub">
        <img src="images/pt2.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button"  onclick="minus(100, 22)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" class="foodCost" align="center"> &#x20B9;100</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button"  onclick="add(100, 22)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>

  </div>
  </div>
  <!--Snack Section-->
  <div class="snacks" id="snacks">
  <div class="heading" ><h1 style="margin:0 0 0 50px;">Snacks</h1></div>
  <div class="parent sub-catalog">
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Samosa</h4>
      </div>
      <div class="image sub">
        <img src="images/sam.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(25, 23)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" align="center" class="foodCost" > &#x20B9;25</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(25, 23)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Bajji</h4>
      </div>
      <div class="image sub">
        <img src="images/bajji.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(15, 24)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" align="center" class="foodCost" > &#x20B9;15</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(15, 24)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Cutlet</h4>
      </div>
      <div class="image sub">
        <img src="images/cut.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button" onclick="minus(30, 25)"  name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style="padding:13.8px;" class="foodCost"   align="center"> &#x20B9;30</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button" onclick="add(30, 25)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Sandwich</h4>
      </div>
      <div class="image sub">
        <img src="images/sand.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button"  onclick="minus(40, 26)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" class="foodCost" align="center"> &#x20B9;40</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button"  onclick="add(40, 26)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
    <div class="flex order">
      <div class="title" >
        <h4 style="margin : 0" align="center">Veg Puff</h4>
      </div>
      <div class="image sub">
        <img src="images/puff.jpg" height="150px" width="250px" alt="">
      </div>
      <div class="cost">
        <div class="change minus">
        <button class="btn dec" type="button"  onclick="minus(20, 27)" name="button"> <i class="fa fa-minus" aria-hidden="true"></i></button>
        </div>
        <div class="price">
          <h4 style=" padding:13.8px;" class="foodCost" align="center"> &#x20B9;20</h4>
        </div>
        <div class="change plus">
          <button class="btn inc" type="button"  onclick="add(20, 27)" name="button"> <i class="fa fa-plus" aria-hidden="true"></i></button>
        </div>
      </div>
  </div>
  </div>
  </div>
  </div>
  <div class="cart" id="finalcart" style="display:none;">
    <center><h2 style="margin:0px; display: inline;">Order total: &#x20B9;<span id="total" >0</span>  </h2>
    <button class="continuebtn" type="submit" form="myform" name="ctnbtn">Continue <i class="fa fa-arrow-right" aria-hidden="true"></i>
 </button></center>
  </div>
  <div class="footer" style="background:black;">
    <center> <p style="color:white; margin:0;font-size:15px;padding:10px;" >  Railway pantry system 2020 &copy; All rights reserved. Made with  <i class="fas fa-heart" style="color:#4CAF50;"></i>  by 19BCE1105 & 19BCE1460 </p><center>
  </div>
<script type="text/javascript">
window.onscroll = function () {
  var myNav = document.getElementById('navbar');
  if (document.body.scrollTop >= 100 ) {
      myNav.classList.add("nav-colored");
      myNav.classList.remove("nav-transparent");
  }
  else {
      myNav.classList.add("nav-transparent");
      myNav.classList.remove("nav-colored");
  }
};

// function to add the quantity when button is clciked

function add(cost, uid){
  //console.log(uid);
  var myform = document.getElementById('myform');
  var nos = document.getElementsByClassName('foodCost')[uid].innerHTML; //text
  var total  = document.getElementById('total');
  if (Number.isInteger(parseInt(nos[0])) == false){
    document.getElementsByClassName('foodCost')[uid].innerHTML = "1 No.";
    total.innerHTML = parseInt(total.innerHTML) + cost;
    var inpt = document.createElement("input");
    inpt.type = "hidden";
    inpt.value = 1;
    inpt.name = "food["+uid+"]";
    inpt.id = uid;
    myform.appendChild(inpt);

  }
  else {
    if(nos[0] < 9){
    nos = parseInt(nos[0]) + 1;
    document.getElementsByClassName('foodCost')[uid].innerHTML = nos + " Nos.";
    total.innerHTML = parseInt(total.innerHTML) + cost;
    var inpt = document.getElementById(uid);
    inpt.value = nos;

  }
  }
  if (parseInt(total.innerHTML) > 0)
    document.getElementById('finalcart').style.display = "block";
}

// function to subract the quantity when button is clciked

function minus(cost, uid){
  var inpt = document.getElementById(uid);
  var nos = document.getElementsByClassName('foodCost')[uid].innerHTML;
  var total  = document.getElementById('total');
  if (Number.isInteger(parseInt(nos[0])) == true && nos[0] > 1){
    nos = parseInt(nos[0]) - 1;
    document.getElementsByClassName('foodCost')[uid].innerHTML = nos + " Nos.";
    if( parseInt(total.innerHTML) > 0){
    total.innerHTML = parseInt(total.innerHTML) - cost;
    inpt.value = nos;
  }
  }
  else {
    document.getElementsByClassName('foodCost')[uid].innerHTML =  "&#x20B9;" + cost;
    if( parseInt(total.innerHTML) > 0 && Number.isInteger(parseInt(nos[0])) == true){
    total.innerHTML = parseInt(total.innerHTML) - cost;
    if(nos[0] == 1)
      inpt.remove();
  }
  }
  if (total.innerHTML == "0")
    document.getElementById('finalcart').style.display = "none";
  if (parseInt(total.innerHTML) > 0)
    document.getElementById('finalcart').style.display = "block";
}

</script>
<form id="myform" action="orderprocess.php"  method="post">
</form>
  </body>


</html>
