</php
require "dbConnect.php";
$db = get_db();
session_start();
if (isset($_POST["full_name"])) {
    $_SESSION["full_name"] = $_POST["full_name"];
}
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
        <h2>Search Players</h2>
        <form action='baseballPlayers.php' method=POST>
        Enter player's last name: <input type=text id=last_name name="last_name">
        <button type=submit>Search Players</button>
        </form>
    <?php
        $statement = $db->prepare("SELECT full_name FROM player");
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            $player_id = $row['player_id'];
            $full_name = $row['full_name'];
            if ($POST["last_name"] == $full_name){
                echo "<p>Name: <a href='playerDetails.php'>$full_name </a><p>";
            }
        }
    ?>
    </div>
</body>
</html>
