<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$comment = htmlspecialchars($_POST["comment"]);
$places = $_POST["places"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Submission Results</title>
</head>
<body>
    <h1>Submission Results </h1>
    <p>Your name is: <?=$name ?></p>
    <p>Your email is: <a href="mailto:<?=$email ?>"><?=$email ?></a></p>
    <p>Your major is: <?=$major ?></p>
    <p>You have traveled to these locations:</p>
    <ul>

<?php
    foreach ($places as $place)
    {
        $sanitized_clean = htmlspecialchars($place);
        echo "<li><p>$sanitized_clean</p></li>";
    }
?>
    </ul>
    <p>Comments: <?=$comment?></p>

</body>
</html>