CREATE TABLE player (
    last_name varchar(80) NOT NULL PRIMARY KEY
);

CREATE TABLE positions (
    position_id_last_name varchar(80) NOT NULL references player(last_name),
    position int NOT NULL, 
    position_name varchar(30) NOT NULL
);

CREATE TABLE teams (
    team_id_last_name varchar(80) NOT NULL references player(last_name),
    team_name varchar(80) NOT NULL,
    league_name varchar(80) NOT NULL
);

CREATE TABLE stats (
    stats_id_last_name varchar(80) NOT NULL references player(last_name),
    at_bats bigint,
    hits bigint,
    walks bigint,
    runs bigint,
    stollen_bases int,
    doubles int,
    triples int,
    homeruns int,
    batting_strikeouts int,
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
    errors int,
    double_plays bigint,
    triple_plays bigint
);

INSERT INTO player (last_name)
VALUES ('Betts');

INSERT INTO positions (position_id_last_name, position, position_name)
VALUES ('Betts', 9, 'RF');

INSERT INTO teams (team_id_last_name, team_name, league_name)
VALUES ('Betts', 'LA Dodgers', 'National League');

INSERT INTO stats (stats_id_last_name, at_bats, hits, walks, runs, stollen_bases, doubles, triples, homeruns, batting_strikeouts, errors, double_plays, triple_plays)
VALUES ('Betts', 200, 68, 20, 30, 7, 10, 2, 16, 45, 2, 3, 0);

INSERT INTO player (last_name)
VALUES ('Kershaw');

INSERT INTO positions (position_id_last_name, position, position_name)
VALUES ('Kershaw', 1, 'LHP');

INSERT INTO teams (team_id_last_name, team_name, league_name)
VALUES ('Kershaw', 'LA Dodgers', 'National League');

INSERT INTO stats (stats_id_last_name, innings_pitched, era, pitching_strikeouts, pitching_walks, pitching_runs_scored, whip, errors, double_plays, triple_plays)
VALUES ('Kershaw', 72, 2.54, 78, 20, 15, 1.54, 0, 2, 0);