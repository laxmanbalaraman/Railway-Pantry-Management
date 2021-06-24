<?php
session_start();
if (isset($_POST['ctnbtn'])){
$servername = "localhost";
$username = "root";
$password = "";
$db = "railway pantry system";
$totalcost = 0;
$food = $_POST["food"];
$_SESSION["food_items"] = $food;

$con = mysqli_connect($servername, $username, $password, $db) or die("could not connet to database");
foreach ($_SESSION["food_items"] as $key => $value) {
$name = mysqli_query($con, "SELECT food_name, price, food_id FROM food_menu WHERE food_id = $key");
$row = mysqli_fetch_assoc($name);
$totalcost += $row['price'] * $value;
}

$_SESSION["total_cost"] = $totalcost;
//print_r($food);
header("Location: order_summary.php");

}
 ?>
