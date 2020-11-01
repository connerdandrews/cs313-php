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
        <form action='insertPositions.php' method=POST>
        Enter player's position number: <input type=number id=position_number name="position_number"><br><br>
        Enter player's position: <input type=text id=position name="position"><br><br>
        

        <button type=submit>Add Position</button>
        </form>
    </div>
</body>
</html>
