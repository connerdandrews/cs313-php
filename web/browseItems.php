<?php
session_start();

if (isset($_POST["diamondbacks"])) {
    $_SESSION["diamondbacks"] = $_POST["diamondbacks"];
}

if (isset($_POST["braves"])) {
    $_SESSION["braves"] = $_POST["braves"];
}

if (isset($_POST["orioles"])) {
    $_SESSION["orioles"] = $_POST["orioles"];
}

if (isset($_POST["redsox"])) {
    $_SESSION["redsox"] = $_POST["redsox"];
}

if (isset($_POST["whitesox"])) {
    $_SESSION["whitesox"] = $_POST["whitesox"];
}

if (isset($_POST["cubs"])) {
    $_SESSION["cubs"] = $_POST["cubs"];
}

if (isset($_POST["reds"])) {
    $_SESSION["reds"] = $_POST["reds"];
}

if (isset($_POST["rockies"])) {
    $_SESSION["rockies"] = $_POST["rockies"];
}

if (isset($_POST["tigers"])) {
    $_SESSION["tigers"] = $_POST["tigers"];
}

if (isset($_POST["astros"])) {
    $_SESSION["astros"] = $_POST["astros"];
}

if (isset($_POST["royals"])) {
    $_SESSION["royals"] = $_POST["royals"];
}

if (isset($_POST["angels"])) {
    $_SESSION["angels"] = $_POST["angels"];
}

if (isset($_POST["dodgers"])) {
    $_SESSION["dodgers"] = $_POST["dodgers"];
}

if (isset($_POST["marlins"])) {
    $_SESSION["marlins"] = $_POST["marlins"];
}

if (isset($_POST["brewers"])) {
    $_SESSION["brewers"] = $_POST["brewers"];
}

if (isset($_POST["twins"])) {
    $_SESSION["twins"] = $_POST["twins"];
}

if (isset($_POST["yankees"])) {
    $_SESSION["yankees"] = $_POST["yankees"];
}

if (isset($_POST["mets"])) {
    $_SESSION["mets"] = $_POST["mets"];
}

if (isset($_POST["athletics"])) {
    $_SESSION["athletics"] = $_POST["athletics"];
}

if (isset($_POST["phillies"])) {
    $_SESSION["phillies"] = $_POST["phillies"];
}

if (isset($_POST["pirates"])) {
    $_SESSION["pirates"] = $_POST["pirates"];
}

if (isset($_POST["padres"])) {
    $_SESSION["padres"] = $_POST["padres"];
}

if (isset($_POST["giants"])) {
    $_SESSION["giants"] = $_POST["giants"];
}

if (isset($_POST["mariners"])) {
    $_SESSION["mariners"] = $_POST["mariners"];
}

if (isset($_POST["cardinals"])) {
    $_SESSION["cardinals"] = $_POST["cardinals"];
}

if (isset($_POST["rays"])) {
    $_SESSION["rays"] = $_POST["rays"];
}

if (isset($_POST["rangers"])) {
    $_SESSION["rangers"] = $_POST["rangers"];
}

if (isset($_POST["bluejays"])) {
    $_SESSION["bluejays"] = $_POST["bluejays"];
}

if (isset($_POST["nationals"])) {
    $_SESSION["nationals"] = $_POST["nationals"];
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
            <form action='browseItems.php' method='POST'>
                <input type="checkbox" name="diamondbacks" value="Arizona Diamondbacks Hat"> Arizona Diamondbacks Hat  $19.99<br>
                <input type="checkbox" name="braves" value="Atlanta Braves Hat "> Atlanta Braves Hat  $19.99<br>
                <input type="checkbox" name="orioles" value="Baltimore Orioles Hat "> Baltimore Orioles Hat  $19.99<br>
                <input type="checkbox" name="redsox" value="Boston Red Sox Hat"> Boston Red Sox Hat  $19.99<br>
                <input type="checkbox" name="whitesox" value="Chicago White Sox Hat "> Chicago White Sox Hat  $19.99<br>
                <input type="checkbox" name="cubs" value="Chicago Cubs Hat "> Chicago Cubs Hat  $19.99<br>
                <input type="checkbox" name="reds" value="Cincinnati Reds Hat "> Cincinnati Reds Hat  $19.99<br>
                <input type="checkbox" name="rockies" value="Colorado Rockies Hat "> Colorado Rockies Hat  $19.99<br>
                <input type="checkbox" name="tigers" value="Detroit TigersHat "> Detroit Tigers Hat  $19.99<br>
                <input type="checkbox" name="astros" value="Houston Astros Hat "> Houston Astros Hat  $19.99<br>
                <input type="checkbox" name="royals" value="Kansas City Royals Hat "> Kansas City Royals Hat  $19.99<br>
                <input type="checkbox" name="angels" value="Los Angeles Angels Hat "> Los Angeles Angels Hat  $19.99<br>
                <input type="checkbox" name="dodgers" value="Los Angeles Dodgers Hat "> Los Angeles Dodgers Hat  $19.99<br>
                <input type="checkbox" name="marlins" value="Miami Marlins Hat "> Miami Marlins Hat  $19.99<br>
                <input type="checkbox" name="brewers" value="Milwaukee Brewers Hat "> Milwaukee Brewers Hat  $19.99<br>
                <input type="checkbox" name="twins" value="Minnesota Twins Hat "> Minnesota Twins Hat  $19.99<br>
                <input type="checkbox" name="yankees" value="New York Yankees Hat "> New York Yankees Hat  $19.99<br>
                <input type="checkbox" name="mets" value="New York Mets Hat "> New York Mets Hat  $19.99<br>
                <input type="checkbox" name="athletics" value="Oakland Athletics Hat "> Oakland Athletics Hat  $19.99<br>
                <input type="checkbox" name="phillies" value="Philadelphia Phillies Hat "> Philadelphia Phillies Hat  $19.99<br>
                <input type="checkbox" name="pirates" value="Pittsburgh Pirates Hat "> Pittsburgh Pirates Hat  $19.99<br>
                <input type="checkbox" name="padres" value="San Diego Padres Hat "> San Diego Padres Hat  $19.99<br>
                <input type="checkbox" name="giants" value="San Francisco Giants Hat "> San Francisco Giants  Hat  $19.99<br>
                <input type="checkbox" name="mariners" value="Seattle Mariners Hat "> Seattle Mariners Hat  $19.99<br>
                <input type="checkbox" name="cardinals" value="St. Louis Cardinals Hat "> St. Louis Cardinals Hat  $19.99<br>
                <input type="checkbox" name="rays" value="Tampa Bay Rays Hat "> Tampa Bay Rays Hat  $19.99<br>
                <input type="checkbox" name="rangers" value="Texas Rangers Hat "> Texas Rangers Hat  $19.99<br>
                <input type="checkbox" name="bluejays" value="Toronto Blue Jays Hat "> Toronto Blue Jays Hat  $19.99<br>
                <input type="checkbox" name="nationals" value="Washington Nationals Hat "> Washington Nationals Hat  $19.99<br><br>
                <button type=submit>Add to Cart</button>

            
            </form>
        </div>
    </div>
</body>
</html>