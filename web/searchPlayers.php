</php

session_start();
if (isset($_POST["last_name1"])) {
    $_SESSION["last_name1"] = $_POST["last_name1"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Baseball Players</title>
</head>
<body>
    <div>
        <h1>Baseball Stats</h1>
    </div>
    <div>
        <h2>Search Players</h2>
        <form action='baseballPlayers.php' method=POST>
        Enter player's last name: <input type=text id=last_name1 name="last_name1">
        <button type=submit>Search Players</button>
        </form>
    <?php

try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}


        $statement = $db->prepare("SELECT last_name FROM player");
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            $last_name = $row['last_name'];
            if ($POST["last_name1"] == $last_name){
                echo "<p>Name: <a href='playerDetails.php'>$last_name </a><p>";
            }
        }
    ?>
    </div>
</body>
</html>
