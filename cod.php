<?php session_start(); ?>
<html>
    <head>
        <title>Cash On Delivery</title>
        <link rel="stylesheet" href="css/cod.css">
    </head>
    <body>
        <form action="paymentserver.php" method="post">
        <p>Note:In Case of Order cancel After Dispatch you will be charged 20% of the order cost!</p>
        <input type="checkbox" style="cursor: pointer;" id="tc" value="on" name="tc" required><label id="ft">I have read and agree with the <a href="tc.html" style="text-decoration: none; color: darkblue;">Terms and Conditions.</a></label>
        <br>
        <br>
        <br>
        <br>
        <button type="submit" name="btn1" class="btn1" value="submit">Confirm Order</button>
            </form>
        <button style="text-decoration: none;" class="btn2" onclick="location.href = 'main payment gateway.php'">Abort</button>
    </body>

</html>
