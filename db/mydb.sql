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
    batting_average real,
    onbase_percentage real, 
    ops_percentage real,
    slugging_percentage real,
    innings_pitched int,
    pitching_strikeouts int,
    pitching_walks int,
    pitching_runs_scored int,
    era real,
    whip real,
    left_handed_percentage real,
    errors int NOT NULL,
    double_plays bigint NOT NULL,
    triple_plays bigint NOT NULL
);

INSERT INTO player (full_name)
VALUES ('Betts');

INSERT INTO positions (position, position_name)
VALUES (9, 'RF');

INSERT INTO teams (team_name, league_name)
VALUES ('LA Dodgers', 'National League');

INSERT INTO stats (at_bats, hits, walks, runs, stollen_bases, doubles, triples, homeruns, batting_strikeouts, errors, double_plays, triple_plays)
VALUES (200, 68, 20, 30, 7, 10, 2, 16, 45, 2, 3, 0);