</php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baseball Stats Homepage</title>
</head>
<body>
    <div>
        <h1>Baseball Stats</h1>
    </div>
    <div>
        <h2>What would you like to do?</h2>
        <p>See a list of current players <button type=button ><a href="baseballPlayers.php">Baseball Players</a></button><br><br>
        Search for a player <button type=button ><a href="searchPlayers.php">Search Players</a></button><br><br>
        Add a New Player <button type=button ><a href="newPlayer.php">Add New Player</a></button><br><br>
        Update an exisitng player's stats <button type=button ><a href="updatePlayer.php">Update Player Statistics</a></button><br><br>

        
        </p>
    </div>
</body>
</html>