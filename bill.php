<?php session_start(); ?>
<html>
  <head>
    <title>Order Summary</title>
  </head>
  <body>
    <title>Homepage - railway Pantry system</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/order_summary.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/e4eecd86d3.js" ></script>
    <link rel="icon"
      type="image/png"
      href="https://img.icons8.com/ios-glyphs/30/000000/cook-male.png">
    <nav class="navbar" id="navbar">
    <ul>
    <li><a class="active" href="pantry system.php"><i class="fa fa-home"></i>Home</a></li>
    <li><a href="order.php"><i class="fa fa-cutlery"></i>order</a></li>
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
<div class="bill_summary" id="bill">
<h2 align="center" style="color:green;margin:0;" >Order Summary</h2><br><br>

<center>
Passenger name : <?php echo $_SESSION["username"]; ?><br><br>
Delivering food to PNR no. : <?php echo $_SESSION['pnr']; ?>
</center>
<div class="display_items">
  <center><table border="1" cellspacing="0"  cellpadding="15"  >
    <tr>
      <th>item</th>
      <th>price</th>
      <th>qty</th>
    </tr>
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "railway pantry system";
  $totalcost = 0;
  //$food = $_POST["food"];
  //$_SESSION["food_items"] = $food;
  $con = mysqli_connect($servername, $username, $password, $db) or die("could not connet to database");
  foreach ($_SESSION["food_items"] as $key => $value) {
  $name = mysqli_query($con, "SELECT food_name, price, food_id FROM food_menu WHERE food_id = $key");
  $row = mysqli_fetch_assoc($name);
  $totalcost += $row['price'] * $value;
  ?>
    <tr>
    <td>
  <?php
  echo $row['food_name']  ;
 ?>
</td>
<td>
<?php
echo $row['price'];
?>
</td>
<td>
<?php
echo $value;
?>
</td>
</tr>
<?php }
//$_SESSION["total_cost"] = $totalcost;
 ?>
<tr>
  <th> total</th>
  <td align="center" colspan="2"><?php echo $_SESSION['total_cost'] ?></td>
</tr>
</table></center><br><br>
<center> <button type="button" onclick="printBill()" class="btn" name="button" form="myform" >Save Bill</button> </center>

</div>
</div>
<center><a style="color:black;" href="pantry system.php">return to Homepage</a></center>
  </body>
  <script type="text/javascript">
    function printBill(){
      //console.log("hi");
      var printableContent = document.getElementById('bill').innerHTML;
      var orginalContent = document.body.innerHTML;
      document.body.innerHTML = printableContent;
      window.print();
      document.body.innerHTML = orginalContent;
    }
  </script>
</html>
