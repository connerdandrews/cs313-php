<?php
session_start();

if (isset($_POST["address1"])) {
    $_SESSION["address1"] = $_POST["address1"];
}
if (isset($_POST["address2"])) {
    $_SESSION["address2"] = $_POST["address2"];
}
if (isset($_POST["city"])) {
    $_SESSION["city"] = $_POST["city"];
}
if (isset($_POST["state"])) {
    $_SESSION["state"] = $_POST["state"];
}
if (isset($_POST["zip"])) {
    $_SESSION["zip"] = $_POST["zip"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Items</title>
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

            <p> Your Order:<br><br>
            <?php
                if (isset($_SESSION["diamondbacks"])) {
                    echo $_SESSION["diamondbacks"] ;
                    echo "<br>";
                }
                if (isset($_SESSION["braves"])) {
                    echo $_SESSION["braves"];
                    echo "<br>";
                }
                if (isset($_SESSION["orioles"])) {
                    echo $_SESSION["orioles"];
                    echo "<br>";
                }
                if (isset($_SESSION["redsox"])) {
                    echo $_SESSION["redsox"];
                    echo "<br>";
                }
                if (isset($_SESSION["whitesox"])) {
                    echo $_SESSION["whitesox"];
                    echo "<br>";
                }
                if (isset($_SESSION["cubs"])) {
                    echo $_SESSION["cubs"];
                    echo "<br>";
                }
                if (isset($_SESSION["reds"])) {
                    echo $_SESSION["reds"];
                    echo "<br>";
                }
                if (isset($_SESSION["rockies"])) {
                    echo $_SESSION["rockies"];
                    echo "<br>";
                }
                if (isset($_SESSION["tigers"])) {
                    echo $_SESSION["tigers"];
                    echo "<br>";
                }
                if (isset($_SESSION["astros"])) {
                    echo $_SESSION["astros"];
                    echo "<br>";
                }
                if (isset($_SESSION["royals"])) {
                    echo $_SESSION["royals"];
                    echo "<br>";
                }
                if (isset($_SESSION["angels"])) {
                    echo $_SESSION["angels"];
                    echo "<br>";
                }
                if (isset($_SESSION["dodgers"])) {
                    echo $_SESSION["dodgers"];
                    echo "<br>";
                }
                if (isset($_SESSION["marlins"])) {
                    echo $_SESSION["marlins"];
                    echo "<br>";
                }
                if (isset($_SESSION["brewers"])) {
                    echo $_SESSION["brewers"];
                    echo "<br>";
                }
                if (isset($_SESSION["twins"])) {
                    echo $_SESSION["twins"];
                    echo "<br>";
                }
                if (isset($_SESSION["yankees"])) {
                    echo $_SESSION["yankees"];
                    echo "<br>";
                }
                if (isset($_SESSION["mets"])) {
                    echo $_SESSION["mets"];
                    echo "<br>";
                }
                if (isset($_SESSION["athletics"])) {
                    echo $_SESSION["athletics"];
                    echo "<br>";
                }
                if (isset($_SESSION["phillies"])) {
                    echo $_SESSION["phillies"];
                    echo "<br>";
                }
                if (isset($_SESSION["pirates"])) {
                    echo $_SESSION["pirates"];
                    echo "<br>";
                }
                if (isset($_SESSION["padres"])) {
                    echo $_SESSION["padres"];
                    echo "<br>";
                }
                if (isset($_SESSION["giants"])) {
                    echo $_SESSION["giants"];
                    echo "<br>";
                }
                if (isset($_SESSION["mariners"])) {
                    echo $_SESSION["mariners"];
                    echo "<br>";
                }
                if (isset($_SESSION["cardinals"])) {
                    echo $_SESSION["cardinals"];
                    echo "<br>";
                }
                if (isset($_SESSION["rays"])) {
                    echo $_SESSION["rays"];
                    echo "<br>";
                }
                if (isset($_SESSION["rangers"])) {
                    echo $_SESSION["rangers"];
                    echo "<br>";
                }
                if (isset($_SESSION["bluejays"])) {
                    echo $_SESSION["bluejays"];
                    echo "<br>";
                }
                if (isset($_SESSION["nationals"])) {
                    echo $_SESSION["nationals"];
                    echo "<br>";
                }

                $address1 = htmlspecialchars($_SESSION["address1"]);
                $address2 = htmlspecialchars($_SESSION["address2"]);
                $city = htmlspecialchars($_SESSION["city"]);
                $state = htmlspecialchars($_SESSION["state"]);
                $zip = htmlspecialchars($_SESSION["zip"]);


                echo "<br><br>";
                echo "Your order will be shipped to: <br><br>";
                echo $address1 . " " . $address2 . "<br>"; 
                echo $city . ", " . $state . " " . $zip;
            ?>
            </p>
        </div>
    </div>
</body>
</html>