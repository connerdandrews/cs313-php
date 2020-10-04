<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="shoppingCart.css">

</head>
<body>
    <div class='grid-container'>
        <div class='grid-child header'>
            MLB Baseball Hats
        </div>

        <div class='grid-child navigation'> 
            <div class='secondary-grid-container'>
                <div class='secondary-grid-child browse'>
                    <a href='browseItems.php'>Browse Items</a>
                </div>
                <div class='secondary-grid-child cart'>
                    <a href='cart.php'>Shopping Cart</a>
                </div>
                <div class='secondary-grid-child checkout'>
                    <a href='checkout.php'>Checkout</a>
                </div>
            </div>
        </div>

        <div class='grid-child main'>
            <form action="confirmation.php" method="POST">
                Please enter your address: <br><br>
                <label for="address1" value="Address Line 1">Address Line 1
                <input type="text" name="address1"><br><br>
                <label for="address2" value="Address Line 2">Address Line 2
                <input type="text" name="address2"><br><br>
                <label for="city" value="City"> City
                <input type="text" name="city"><br><br>
                <label for="state" value="State">State
                <input type="text" name="state"><br><br>
                <label for="zip" value="Zip">Zip
                <input type="text" name="zip"><br><br>
                <button type=submit>Confirm Order</button>

            </form>
        </div>
    </div>
</body>
</html>