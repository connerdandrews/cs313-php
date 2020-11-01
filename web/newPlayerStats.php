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
        <form action='insertStats.php' method=POST>
        Enter number of at-bats: <input type=number id=at_bats name="at_bats"><br><br>
        Enter number of hits: <input type=number id=hits name="hits"><br><br>
        Enter number of walks: <input type=number id=walks name="walks"><br><br>
        Enter number of runs scored: <input type=number id=runs name="runs"><br><br>
        Enter number of stollen bases: <input type=number id=stollen_bases name="stollen_bases"><br><br>
        Enter number of doubles: <input type=number id=doubles name="doubles"><br><br>
        Enter number of triples: <input type=number id=triples name="triples"><br><br>
        Enter number of homeruns: <input type=number id=homeruns name="homeruns"><br><br>
        Enter number of batting strikeouts: <input type=number id=batting_strikeouts name="batting_strikeouts"><br><br>
        Enter number of innings pitched: <input type=number id=innings_pitched name="innings_pitched"><br><br>
        Enter number of pitching strikeouts: <input type=number id=pitching_strikeouts name="pitching_strikeouts"><br><br>
        Enter number of pitching walks: <input type=number id=pitching_walks name="pitching_walks"><br><br>
        Enter the number of pitching runs given up: <input type=number id=pitching_runs_scored name="pitching_runs_scored"><br><br>
        Enter number of errors: <input type=number id=errors name="errors"><br><br>
        Enter number of double plays: <input type=number id=double_plays name="double_plays"><br><br>
        Enter number of triple plays:  <input type=number id=triple_plays name="triple_plays"><br><br>


        <button type=submit>Add Stats</button>
        </form>
    </div>
</body>
</html>
