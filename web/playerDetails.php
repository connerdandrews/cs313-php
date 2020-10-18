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
        <h2>Player Stats</h2>
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



        $statement = $db->prepare("SELECT * FROM player, positions, teams, stats");
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            $last_name = $row['last_name'];
            $position = $row['position'];
            $position_name = $row['position_name'];
            $team_name = $row['team_name'];
            $league_name = $row['league_name'];
            $at_bats = $row['at_bats'];
            $hits = $row['hits'];
            $walks = $row['walks'];
            $runs = $row['runs'];
            $stollen_bases = $row['stollen_bases'];
            $doubles = $row['doubles'];
            $triples = $row['triples'];
            $homeruns = $row['homeruns'];
            $batting_strikeouts = $row['batting_strikeouts'];
            $batting_average = $row['batting_average'];
            $onbase_percentage = $row['onbase_percentage'];
            $ops_percentage = $row['ops_percentage'];
            $slugging_percentage = $row['slugging_percentage'];
            $innings_pitched = $row['innings_pitched'];
            $pitching_strikeouts = $row['pitching_strikeouts'];
            $pitching_walks = $row['pitching_walks'];
            $pitching_runs_scored = $row['pitching_runs_scored'];
            $era = $row['era'];
            $whip = $row['whip'];
            $left_handed_percentage = $row['left_handed_percentage'];
            $errors = $row['errors'];
            $double_plays = $row['double_plays'];
            $triple_plays = $row['triple_plays'];



            if ($position == 1) {
                echo "<p>Name: $last_name | Position: $position | Team Name $team_name | ERA: $era | Innings: $innings_pitched | Strikeouts: $pitching_strikeouts | Walks: $pitching_walks | Runs Against: $pitching_runs_scored | WHIP: $whip</p>";
            }

            else {
                echo "<p>Name: $last_name | Position: $position | Team Name: $team_name | At-bats: $at_bats | Hits: $hits | Walks: $walks | Runs: $runs | Stollen Bases: $stollen_bases | Doubles: $doubles | Triples: $triples | Homeruns: $homeruns | Strikeouts: $batting_strikeouts | Batting Average: $batting_average | On-base Percentage: $onbase_percentage | OPS: $ops_percentage | Slugging Percentage: $slugging_percentage | Left-handed Percentage: $left_handed_percentage | Errors: $errors | Double Plays: $double_plays | Triple Plays: $triple_plays </p>";
            }

        }
    ?>
    </div>
</body>
</html>
