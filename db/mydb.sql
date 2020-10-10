CREATE TABLE player (
    player_id SERIAL NOT NULL PRIMARY KEY,
    full_name varchar(80) NOT NULL,
    position_id int NOT NULL REFERENCES positions(player_id),
    team_name_id int NOT NULL REFERENCES teams(player_id),
    at_bats_id int NOT NULL REFERENCES stats(player_id)
);

CREATE TABLE positions (
    player_id SERIAL NOT NULL PRIMARY KEY,
    position int NOT NULL, 
    position_name varchar(30) NOT NULL
);

CREATE TABLE teams (
    player_id SERIAL NOT NULL PRIMARY KEY,
    team_name varchar(80) NOT NULL,
    league_name varchar(80) NOT NULL
);

CREATE TABLE stats (
    player_id SERIAL NOT NULL PRIMARY KEY,
    at_bats bigint NOT NULL,
    hits bigint NOT NULL,
    walks bigint NOT NULL,
    runs bigint NOT NULL,
    stollen_bases int NOT NULL,
    doubles int NOT NULL,
    triples int NOT NULL,
    homeruns int NOT NULL,
    batting_strikeouts int NOT NULL,
    batting_average real NOT NULL,
    onbase_percentage real NOT NULL, 
    ops_percentage real NOT NULL,
    slugging_percentage real NOT NULL,
    innings_pitched int NOT NULL,
    pitching_strikeouts int NOT NULL,
    pitching_walks int NOT NULL,
    pitching_runs_scored int NOT NULL,
    era real NOT NULL,
    whip real NOT NULL,
    left_handed_percentage real NOT NULL,
    errors int NOT NULL,
    double_plays bigint NOT NULL,
    triple_plays bigint NOT NULL
);