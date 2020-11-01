<?php
if (isset($_POST["last_name"])) {
  $_SESSION["last_name"] = $_POST["last_name"];
}
$last_name = $_POST["last_name"];

if (isset($_POST["first_name"])) {
  $_SESSION["first_name"] = $_POST["first_name"];
}
$first_name = $_POST["first_name"];

if (isset($_POST["position_number"])) {
  $_SESSION["position_number"] = $_POST["position_number"];
}
$position_number = $_POST["position_number"];

if (isset($_POST["position"])) {
  $_SESSION["position"] = $_POST["position"];
}
$position = $_POST["position"];

if (isset($_POST["team_name"])) {
  $_SESSION["team_name"] = $_POST["team_name"];
}
$team_name = $_POST["team_name"];

if (isset($_POST["league_name"])) {
  $_SESSION["league_name"] = $_POST["league_name"];
}
$league_name = $_POST["league_name"];

if (isset($_POST["at_bats"])) {
  $_SESSION["at_bats"] = $_POST["at_bats"];
}
$at_bats = $_POST["at_bats"];

if (isset($_POST["hits"])) {
  $_SESSION["hits"] = $_POST["hits"];
}
$hits = $_POST["hits"];

if (isset($_POST["walks"])) {
  $_SESSION["walks"] = $_POST["walks"];
}
$walks = $_POST["walks"];

if (isset($_POST["runs"])) {
  $_SESSION["runs"] = $_POST["runs"];
}
$runs = $_POST["runs"];

if (isset($_POST["stollen_bases"])) {
  $_SESSION["stollen_bases"] = $_POST["stollen_bases"];
}
$stollen_bases = $_POST["stollen_bases"];

if (isset($_POST["doubles"])) {
  $_SESSION["doubles"] = $_POST["doubles"];
}
$doubles = $_POST["doubles"];

if (isset($_POST["triples"])) {
  $_SESSION["triples"] = $_POST["triples"];
}
$triples = $_POST["triples"];

if (isset($_POST["homeruns"])) {
  $_SESSION["homeruns"] = $_POST["homeruns"];
}
$homeruns = $_POST["homeruns"];

if (isset($_POST["batting_strikeouts"])) {
  $_SESSION["batting_strikeouts"] = $_POST["batting_strikeouts"];
}
$batting_strikeouts = $_POST["batting_strikeouts"];

if (isset($_POST["innings_pitched"])) {
  $_SESSION["innings_pitched"] = $_POST["innings_pitched"];
}
$innings_pitched = $_POST["innings_pitched"];

if (isset($_POST["pitching_strikeouts"])) {
  $_SESSION["pitching_strikeouts"] = $_POST["pitching_strikeouts"];
}
$pitching_strikeouts = $_POST["pitching_strikeouts"];

if (isset($_POST["pitching_walks"])) {
  $_SESSION["pitching_walks"] = $_POST["pitching_walks"];
}
$pitching_walks = $_POST["pitching_walks"];

if (isset($_POST["pitching_runs_scored"])) {
  $_SESSION["pitching_runs_scored"] = $_POST["pitching_runs_scored"];
}
$pitching_runs_scored = $_POST["pitching_runs_scored"];

if (isset($_POST["errors"])) {
  $_SESSION["errors"] = $_POST["errors"];
}
$errors = $_POST["errors"];

if (isset($_POST["double_plays"])) {
  $_SESSION["double_plays"] = $_POST["double_plays"];
}
$double_plays = $_POST["double_plays"];

if (isset($_POST["triple_plays"])) {
  $_SESSION["triple_plays"] = $_POST["triple_plays"];
}
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


$query = "INSERT INTO player(last_name) VALUES(:last_name)";
$query .= "INSERT INTO positions(position_id_last_name, position, position_name) VALUES(:last_name, :position_number, :position)";
$statement = $db->prepare($query);

$statement->bindvalue(':last_name', $last_name);
$statement->bindvalue(':position_number', $position_number);
$statement->bindvalue(':position', $position);
$statement->execute();

header("Location: baseballPlayers.php");
die();


?>