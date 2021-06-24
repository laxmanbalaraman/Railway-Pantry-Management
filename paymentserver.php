<?php
session_start();
if(isset($_POST["paybtn"]) or  $_POST["btn1"]){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "railway pantry system";
  echo $_SESSION['pnr'];
  echo $_SESSION['username'];
  print_r( $_SESSION["food_items"]);
  $con = mysqli_connect($servername, $username, $password, $db) or die("could not connet to database");
  foreach ($_SESSION["food_items"] as $key => $value) {
  $name = mysqli_query($con, "INSERT INTO order_info (pnr, food_id, qty, customer_name)
  VALUES ('{$_SESSION["pnr"]}', '$key', '$value', '{$_SESSION["username"]}')");

}
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "railway pantry system";
  $totalcost = 0;
  $con = mysqli_connect($servername, $username, $password, $db) or die("could not connet to database");


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: irctc12102020@gmail.com' . "\r\n";
$bodymsg = '
  <h1 style="color:green" align="center">Thanks for Ordering at IRCTC Railway Pantry</h1>
  <h2 align="center" >Customer name: '. $_SESSION['username'] .'</h2>
  <h2 align="center" >PNR number: '. $_SESSION['pnr'] .'</h2>
  <h3 style="color:blue" align="center">Your Order Summary</h3>
  <center><table border="1" cellspacing="0"  cellpadding="15"  >
    <tr>
      <th>item</th>
      <th>price</th>
      <th>qty</th>
    </tr>
    ';

foreach ($_SESSION["food_items"] as $key => $value) {
$name = mysqli_query($con, "SELECT food_name, price, food_id FROM food_menu WHERE food_id = $key");
$row = mysqli_fetch_assoc($name);

 $bodymsg .= '<tr>
          <th>'.$row['food_name'].'</th>
          <th>'.$row['price'].'</th>
          <th>'.$value.'</th>
          </tr>
 ';
  }
  $bodymsg .= '</table>
  </center>
  <b><h2  align="center" style="color:blue">Total payable amount &#x20B9; '. $_SESSION['total_cost'] .'</h2><b>';

$email_addr = mysqli_query($con, "SELECT email FROM usertable WHERE username = '{$_SESSION['username']}'");
$row = mysqli_fetch_assoc($email_addr);
mail($row['email'], "Order Successfull!!", $bodymsg, $headers);

header("Location:bill.php");
}
  ?>
