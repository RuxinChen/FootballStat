CREATE TABLE league (
	leagueName            VARCHAR(50) NOT NULL,
	PRIMARY KEY (leagueName)
	);

CREATE TABLE season (
    seasonID        VARCHAR(50) NOT NULL,
    playerID        VARCHAR(50) NOT NULL,
    clubName        VARCHAR(50),
    squadNumber     INT,
    positionID      VARCHAR(50),
    PAC             FLOAT(2),
    DRI             FLOAT(2),
    SHO             FLOAT(2),
    DEF             FLOAT(2),
    PAS             FLOAT(2),
    PHY             FLOAT(2),
    PRIMARY KEY     (playerID, seasonID)
    );

CREATE TABLE game (
    gameID          INT NOT NULL AUTO_INCREMENT,
    leagueName      VARCHAR(50),
    seasonID        VARCHAR(50),
    cupID           INT,
    date            DATE,   
    hostScore       INT,
    guestScore      INT,
    hostTeam        VARCHAR(50),
    guestTeam       VARCHAR(50),
    PRIMARY KEY     (gameID)
 );

CREATE TABLE cup (
	cupID           INT NOT NULL AUTO_INCREMENT,
	cupName         VARCHAR(50),
	seasonID        VARCHAR(50),
    stadiumName     VARCHAR(50),
	PRIMARY KEY     (cupID)
);

CREATE TABLE club (
    clubName        VARCHAR(50) NOT NULL,
    stadiumName     VARCHAR(50) DEFAULT NULL,
    leagueName      VARCHAR(50) NOT NULL,
    PRIMARY KEY     (clubName)
    );

CREATE TABLE stadium (
    stadiumName     VARCHAR(50) NOT NULL,
    capacity        INT, 
    city            VARCHAR(50),
    PRIMARY KEY     (stadiumName)
    );
 
CREATE TABLE coach (
    clubName        VARCHAR(50) NOT NULL,
    name            VARCHAR(50) NOT NULL,
    seasonID        VARCHAR(50) NOT NULL,
    age             INT,
    PRIMARY KEY     (clubName, name, seasonID)
    );

CREATE TABLE playerInfo (
    playerID        VARCHAR(50) NOT NULL, 
    age             INT,
    name            VARCHAR(50),
    height          INT,
    country         VARCHAR(50),
    PRIMARY KEY     (playerID)
    );


CREATE TABLE positions (
    positionID      VARCHAR(50) NOT NULL, 
    position1       VARCHAR(50), 
    position2       VARCHAR(50),
    position3       VARCHAR(50),
    PRIMARY KEY     (positionID)
    );


CREATE TABLE gameStat (
    gameID          INT NOT NULL AUTO_INCREMENT, 
    playerID        VARCHAR(50) NOT NULL, 
    seasonID        VARCHAR(50) NOT NULL,
    length          INT, 
    duals           INT,  
    redCard         INT,
    yellowCard      INT,
    goals           INT,
    passes          INT,
    attempts        INT,
    defensive       INT,
    PRIMARY KEY     (gameID, playerID, seasonID)
    );


## add trigger: 
DELIMITER | 
CREATE TRIGGER GameExistsTrigger
AFTER INSERT ON gameStat
FOR EACH ROW 
    BEGIN 
        INSERT IGNORE INTO game(seasonID)
            VALUES(NEW.seasonID);
END; |
DELIMITER ;


ALTER TABLE game
ADD    CONSTRAINT game2 FOREIGN KEY     (leagueName) REFERENCES league(leagueName) 
ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE cup
ADD   CONSTRAINT cup1 FOREIGN KEY      (stadiumName) REFERENCES stadium(stadiumName) 
ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE club
ADD    CONSTRAINT club2 FOREIGN KEY     (leagueName) REFERENCES league(leagueName) 
ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE coach
ADD    CONSTRAINT coach1 FOREIGN KEY     (clubName) REFERENCES club(clubName) 
ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE gameStat
ADD    CONSTRAINT gameStat3 FOREIGN KEY     (playerID) REFERENCES playerInfo(playerID) 
ON UPDATE CASCADE ON DELETE CASCADE;


# procedure 1: insert a club 
DELIMITER |
CREATE PROCEDURE InsertClub(
    IN    addclub           VARCHAR(50),
    IN    addstadiumName    VARCHAR(50),
    IN    addleague         VARCHAR(50))
BEGIN
    IF  addclub NOT IN (SELECT clubName FROM club) THEN
        INSERT INTO club(clubName, stadiumName, leagueName)
        VALUES(addclub, addstadiumName, addleague);
        END IF;
END; |
DELIMITER ;



# procedure 2: insert a player
DELIMITER |
CREATE PROCEDURE InsertPlayer(
    IN    addplayer         VARCHAR(50),
    IN    addclub           VARCHAR(50),
    IN    addseason         VARCHAR(50))
BEGIN
    IF  addplayer NOT IN (SELECT DISTINCT playerID FROM season WHERE
        clubName = addclub) THEN
        INSERT INTO season(seasonID, playerID, clubName)
        VALUES(addseason, addplayer, addclub);
        END IF;
END; |
DELIMITER ;


# procedure 3: insert a player tech info
DELIMITER |
CREATE PROCEDURE InsertPlayerTech(
    IN    addplayer         VARCHAR(50),
    IN    addclub           VARCHAR(50),
    IN    addseason         VARCHAR(50),
    IN    addsquad          INT,
    IN    addpac            FLOAT(2),
    IN    adddri            FLOAT(2),
    IN    addsho            FLOAT(2),
    IN    adddef            FLOAT(2),
    IN    addpas            FLOAT(2),
    IN    addphy            FLOAT(2))
BEGIN
    IF  addplayer NOT IN (SELECT DISTINCT playerID FROM season WHERE
        clubName = addclub AND seasonID = addseason) THEN
        INSERT INTO season(seasonID, playerID, clubName, squadNumber, 
            PAC, DRI, SHO, DEF, PAS, PHY)
        VALUES(addseason, addplayer, addclub, addsquad, addpac, adddri,
            addsho, adddef, addpas, addphy);
        END IF;
END; |
DELIMITER ;

CREATE TABLE game (
    gameID          INT NOT NULL AUTO_INCREMENT,
    leagueName      VARCHAR(50),
    seasonID        VARCHAR(50),
    cupID           INT,
    dateTime        DATETIME,   
    hostScore       INT,
    guestScore      INT,
    hostTeam        VARCHAR(50) NOT NULL,
    guestTeam       VARCHAR(50) NOT NULL,
    PRIMARY KEY     (gameID)
 );


# procedure 4: insert a game stat
DELIMITER |
CREATE PROCEDURE InsertGame(
    IN    addseason         VARCHAR(50),
    IN    adddate           DATETIME,
    IN    addhostScore         INT,
    IN    addguestScore        INT,
    IN    addhostTeam       VARCHAR(50), 
    IN    addguestTeam      VARCHAR(50))
BEGIN
    IF  NOT EXISTS (SELECT * FROM game WHERE 
        seasonID =addseason AND hostScore = addhostScore AND
        guestScore = addguestScore AND hostTeam = addhostTeam
        AND guestTeam = addguestTeam) THEN
        INSERT INTO game(seasonID, dateTime, hostScore,
            guestScore, hostTeam, guestTeam)
        VALUES(addseason, adddate, addhostScore, addguestScore,
            addhostTeam, addguestTeam);
        END IF;
END; |
DELIMITER ;

