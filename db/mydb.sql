CREATE TABLE player (
    last_name varchar(80) NOT NULL PRIMARY KEY
);

CREATE TABLE positions (
    last_name varchar(80) NOT NULL references player(last_name),
    position int NOT NULL, 
    position_name varchar(30) NOT NULL
);

CREATE TABLE teams (
    last_name varchar(80) NOT NULL references player(last_name),
    team_name varchar(80) NOT NULL,
    league_name varchar(80) NOT NULL
);

CREATE TABLE stats (
    last_name varchar(80) NOT NULL references player(last_name),
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

INSERT INTO player (last_name)
VALUES ('Betts');

INSERT INTO positions (last_name, position, position_name)
VALUES ('Betts', 9, 'RF');

INSERT INTO teams (last_name, team_name, league_name)
VALUES ('Betts', 'LA Dodgers', 'National League');

INSERT INTO stats (last_name, at_bats, hits, walks, runs, stollen_bases, doubles, triples, homeruns, batting_strikeouts, errors, double_plays, triple_plays)
VALUES ('Betts', 200, 68, 20, 30, 7, 10, 2, 16, 45, 2, 3, 0);