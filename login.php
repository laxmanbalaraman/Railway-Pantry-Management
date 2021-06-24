<?php session_start(); if (isset($_SESSION["username"])){unset($_SESSION["username"]);} ?>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login.css">
      </head>
    <body>
<?php

$db = mysqli_connect('localhost','root','','railway pantry system') or die("could not connect to database");
$errors=array();
$p=0;
if(isset($_POST['signin'])){

  $username= mysqli_real_escape_string($db,$_POST['username']);
  $password= mysqli_real_escape_string($db,$_POST['password']);

  $query="SELECT * FROM usertable WHERE username='$username' AND password ='$password'";
  $results=mysqli_query($db,$query);
  if (mysqli_num_rows($results)){
    $_SESSION['username'] = $username;
    header("Location:pantry system.php");
  }

  else{
      echo "<p style="."color:azure;margin-top:31%;margin-left:41%;".">Wrong user or password. Try again!</p>";
  }
}
?>
        <form action="" method="post">
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">

                <input type="text" placeholder="User ID" name="username" value="">
            </div>
            <div class="textbox">
                <input type="password" placeholder="Password" name="password" value="">
            </div>
            <input class="btn" type="submit" name="signin" value="Sign In">
            <br><br>
            <p><a href="register.php" style="cursor: pointer;text-decoration: none;">Don't Have An Account? Register</a></p>
        </div>
            </form>
    </body>
  </html>
