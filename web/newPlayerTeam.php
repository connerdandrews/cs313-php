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
        <form action='insertTeams.php' method=POST>
        Enter team name: <input type=text id=team_name name="team_name"><br><br>
        Enter league name: <input type=text id=league_name name="league_name"><br><br>

        <button type=submit>Add Team</button>
        </form>
    </div>
</body>
</html>
