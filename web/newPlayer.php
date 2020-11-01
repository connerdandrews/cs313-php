</php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Player</title>
</head>
<body>
    <div>
        <h1>Baseball Stats</h1>
    </div>
    <div>
        <h2>New Baseball Player</h2>
        <form action='insertPlayer.php' method=POST>
        Enter player's last name: <input type=text id=last_name name="last_name"><br><br>
        Enter player's first name: <input type=text id=first_name name="first_name"><br><br>

        <button type=submit>Add Player</button>
        </form>
    </div>
</body>
</html>
