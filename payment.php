<?php session_start(); ?>
<html>
<head>
<title>Payment Gateway</title>
    <link rel="stylesheet" href="css/payment.css">
</head>
    <body>
        <img src="images/pg.png" class="img">
        <div class="container">
        <form action="paymentserver.php" method="post" >
            <label style="color: white;"><b>Card number: </b></label>
            <input class="inp-txt" type="tel" placeholder="Card number" required onKeyPress="if(this.value.length==16)return false;" pattern=[0-9]{16}>
            <br>
            <br>
            <label style="color: white;" id="expm"><b>Expiry month: </b></label>
            <input class="inp-txt" required type="number" placeholder="MM" min="01" max="12" onKeyPress="if(this.value.length==2)return false;">
            <label style="color: white;"><b>Expiry year: </b></label>
            <input class="inp-txt" type="number" placeholder="YY"  min="20" max="50" onKeyPress="if(this.value.length==2)return false;">
            <br>
            <br>
            <label style="color: white;"><b>CVV code: </b></label>
            <input class="inp-txt" required type="text" placeholder="xxx" onKeyPress="if(this.value.length==3)return false;" pattern=[0-9]{3}>
            <br>
            <br>
            <label style="color: white;"><b>Name on the Card: </b></label>
            <input class="inp-txt" required type="text" placeholder="Name on the Card" >
            <br>
            <br>
            <input class="btn" type="submit" name="paybtn" value="Pay" onclick="conditions()"><br>
            <a href="main payment gateway.php" style="color:green;" > choose another payment mode </a>
        </form>
            </div>

    </body>
</html>
