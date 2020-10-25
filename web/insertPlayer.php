<?php
$last_name = $_POST["last_name"];
$first_name = $_POST["first_name"];
$position_number = $_POST["position_number"];
$position = $_POST["position"];
$team_name = $_POST["team_name"];
$league_name = $_POST["league_name"];
$at_bats = $_POST["at_bats"];
$hits = $_POST["hits"];
$walks = $_POST["walks"];
$runs = $_POST["runs"];
$stollen_bases = $_POST["stollen_bases"];
$doubles = $_POST["doubles"];
$triples = $_POST["triples"];
$homeruns = $_POST["homeruns"];
$batting_strikeouts = $_POST["batting_strikeouts"];
$innings_pitched = $_POST["innings_pitched"];
$pitching_strikeouts = $_POST["pitching_strikeouts"];
$pitching_walks = $_POST["pitching_walks"];
$pitching_runs_scored = $_POST["pitching_runs_scored"];
$errors = $_POST["errors"];
$double_plays = $_POST["double_plays"];
$triple_plays = $_POST["triple_plays"];

//echo "<p>$last_name $first_name $position_number $position $team_name $league_name $at_bats $hits $walks $runs $stollen_bases $doubles $triples $batting_strikeouts $innings_pitched $pitching_strikeouts $pitching_walks $pitching_runs_scored $errors $double_plays $triple_plays</p>";


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


$query = "INSERT INTO player(last_name) VALUE(:last_name)";
$statement = $db->prepare($query);

$statement->bindvalue(':last_name', $last_name);
$statement->execute();


$query_2 = 'INSERT INTO positions(position_id_last_last_name, position, position_name) VALUES(:last_name, :position_number, :position)';
$statement = $db->prepare($query_2);
$statement->bindvalue(':last_name', $last_name);
$statement->bindvalue(':position_number', $position_number);
$statement->bindvalue(':position', $position);
$statement->execute();


$query_3 = 'INSERT INTO teams(team_id_last_name, team_name, league_name) VALUES(:last_name, :team_name, :league_name)';
$statement = $db->prepare($query_3);
$statement->bindvalue(':last_name', $last_name);
$statement->bindvalue(':team_name', $team_name);
$statement->bindvalue(':league_name', $league_name);
$statement->execute();


$query_4 = 'INSERT INTO stats(stats_id_last_name, at_bats, hits, walks, runs, stollen_bases, doubles, triples, homeruns, batting_strikeouts, innings_pitched, pitching_strikeouts, pitching_walks, pitching_runs_scored, errors, double_plays, triple_plays) VALUES(:last_name, :at_bats, :hits, :walks, :runs, :stollen_bases, :doubles, :triples, :homeruns, :batting_strikeouts, :innings_pitched, :pitching_strikeouts, :pitching_walks, :pitching_runs_scored, :errors, :double_plays, :triple_plays)';
$statement = $db->prepare($query_4);
$statement->bindvalue(':last_name', $last_name);
$statement->bindvalue(':at_bats', $at_bats);
$statement->bindvalue(':hits', $hits);
$statement->bindvalue(':walks', $walks);
$statement->bindvalue(':runs', $runs);
$statement->bindvalue(':stollen_bases', $stollen_bases);
$statement->bindvalue(':doubles', $doubles);
$statement->bindvalue(':triples', $triples);
$statement->bindvalue(':homeruns', $homeruns);
$statement->bindvalue(':batting_strikeouts', $batting_strikeouts);
$statement->bindvalue(':innings_pitched', $innings_pitched);
$statement->bindvalue(':pitching_strikeouts', $pitching_strikeouts);
$statement->bindvalue(':pitching_walks', $pitching_walks);
$statement->bindvalue(':pitching_runs_scored', $pitching_runs_scored);
$statement->bindvalue(':errors', $errors);
$statement->bindvalue(':double_plays', $double_plays);
$statement->bindvalue(':triple_plays', $triple_plays);

$statement->execute();

header("Location: baseballPlayers.php");
die();


?>