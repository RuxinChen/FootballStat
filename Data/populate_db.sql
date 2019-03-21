INSERT INTO league
VALUES ('Premier League'), 
('League 1'),
('Bundesliga'),
('Serie A'),
('La Liga');

INSERT INTO season 
VALUES ('2017-2018', 'Lionel Messi', 'Barcelona', 10, '24', 89, 95, 90, 26, 86, 61),
('2018-2019', 'Lionel Messi', 'Barcelona', 10, '24', 92, 95, 87, 26, 82, 58),
('2016-2017', 'Lionel Messi', 'Barcelona', 10, '24', 93, 96, 92, 26, 86, 62),
('2018-2019', 'Cristiano Ronaldo', 'Juventus', 7, '2', 90, 90, 93, 33, 82, 80),
('2017-2018', 'Gareth Bale', 'Real Madrid', 11, '2', 92, 87, 83, 35, 85, 75),
('2017-2018', 'Sergio Ramos', 'Real Madrid', 4, '1', 78, 72, 62, 82, 71, 86),
('2018-2019', 'Sergio Ramos', 'Real Madrid', 4, '1', 76, 72, 63, 88, 71, 83),
('2018-2019', 'Neymar', 'Paris Saint Germain', 10, '2', 92, 94, 84, 30, 79, 60),
('2018-2019', 'Luis Suarez', 'Barcelona', 9, '2', 82,86, 90,43,79,81),
('2017-2018', 'Robert Lewandowski', 'Bayern Munich', 9, '2', 81, 86, 88, 38, 75 ,82),
('2018-2019', 'Manuel Neuer', 'Bayern Munich', 1, '3', 91, 89, 90, 58, 95, 91),
('2018-2019', 'Eden Hazard', 'Chelsea', 10, '24', 90, 92, 82, 32, 84, 66),
('2018-2019', 'Luka Modric', 'Real Madrid', 10, '4', 73, 89, 75, 72, 86, 65),
('2018', 'Lionel Messi', NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2018-2019', 'Gareth Bale', 'Real Madrid', 11, '2', 92, 87, 83, 35, 85, 75),
('2016-2017', 'Sergio Ramos', 'Real Madrid', 4, '1', 78, 72, 62, 82, 71, 86);


INSERT INTO club 
VALUES ('Barcelona', 'Camp Nou', 'La Liga'),
('Real Madrid', 'Santiago Bernabeu Stadium', 'La Liga'),
('Manchester United', 'Old Trafford', 'Premier League'),
('Manchester City', 'City of Manchester Stadium', 'Premier League'),
('Liverpool', 'Anfield', 'Premier League'),
('Chelsea', 'Stamford Bridge', 'Premier League'),
('Juventus', 'Allianz Stadium', 'Serie A'),
('Napoli', 'Stadio San Paolo', 'Serie A'),
('AC Milan', 'San Siro', 'Serie A'),
('Bayern Munich', 'Allianz Arena', 'Bundesliga'),
('Borussia Dortmund', 'Westfalenstadion', 'Bundesliga'),
('Eintracht Frankfurt', 'Commerzbank-Arena', 'Bundesliga'),
('Paris Saint Germain', 'Parc des Princes', 'League 1'),
('Montpellier', 'Stade de la Mosson', 'League 1'),
('Sevilla', 'Ramón Sánchez Pizjuán', 'La Liga'),
('Valencia', 'Mestalla', 'La Liga'),
('AtleticoMadrid', 'Wanda Metropolitano', 'La Liga');

INSERT INTO coach 
VALUES ('Barcelona', 'Ernesto Valverde', '2018-2019', 54),
('Sevilla', 'Pablo Machin', '2018-2019', 43),
('Real Madrid', 'Julen Lopetegui', '2018-2019', 52),
('Manchester United', 'Jose Mourinho', '2018-2019', 55),
('Manchester City', 'Pep Guardiola', '2018-2019', 47),
('Liverpool', 'Jurgen Klopp', '2018-2019', 51),
('Chelsea', 'Maurizio Sarri', '2018-2019', 59),
('Juventus', 'Massimiliano Allegri', '2018-2019', 51),
('Napoli', 'Carlo Ancelotti', '2018-2019', 59),
('AC Milan', 'Gennaro Gattuso', '2018-2019', 40),
('Bayern Munich', 'Niko Kovac', '2018-2019', 47),
('Borussia Dortmund', 'Lucien Favre', '2018-2019', 60),
('Eintracht Frankfurt', 'Adi Hutter', '2018-2019', 48),
('Paris Saint Germain', 'Thomas Tuchel', '2018-2019', 48),
('Montpellier', 'Michel Der Zakarian', '2018-2019', 55);

INSERT INTO cup(cupName, seasonID, stadiumName)
VALUES ('WorldCup', '2018', NULL),
('WorldCup', '2014', NULL),
('WorldCup', '2010', NULL);

INSERT INTO stadium
VALUES ('Camp Nou', 99354, 'Barcelona'),
('Santiago Bernabeu Stadium', 81044, 'Madrid'),
('Old Trafford', 74994, 'Manchester'),
('City of Manchester Stadium',  55097, 'Manchester'),
('Anfield', 54074, 'Liverpool'),
('Stamford Bridge', 41631, 'Fulham'),
('Allianz Stadium', 41507, 'Turin'),
('Stadio San Paolo', 60240, 'Naples'),
('San Siro', 80018, 'Milan'),
('Allianz Aren', 75000, 'Munich'),
('Westfalenstadion', 81365, 'Dortmund'),
('Commerzbank-Arena', 51500, 'Frankfurt'),
('Stade de la Mosson', 32900, 'Montpellier'),
('Ramón Sánchez Pizjuan', 43883, 'Sevilla');

INSERT INTO playerInfo
VALUES ('Lionel Messi', 31, 'Lionel Messi', 170, 'Argentina'),
('Cristiano Ronaldo', 33, 'Cristiano Ronaldo', 185, 'Portugal'),
('Neymar', 26, 'Neymar', 175, 'Brazil'),
('Luis Suarez', 31, 'Luis Suarez', 182, 'Uruguay'),
('Sergio Ramos', 32, 'Sergio Ramos', 184, 'Spain'), 
('Robert Lewandowski', 30, 'Robert Lewandowski', 185, 'Poland'),
('Manuel Neuer', 32, 'Manuel Neuer', 193, 'German'),
('Eden Hazard', 27, 'Eden Hazard', 173, 'Belgian'), 
('Gareth Bale', 29, 'Gareth Bale', 185, 'Welsh'),
('Luka Modric', 33, 'Luka Modric', 172, 'Croatian');

INSERT INTO positions 
VALUES ('1', 'Defenders', NULL, NULL),
('2', 'Forwards', NULL, NULL),
('3', 'Goalies', NULL, NULL),
('4', 'Midfielders', NULL, NULL),
('12', 'Defenders', 'Forwards', NULL),
('13', 'Defenders', 'Goalies', NULL),
('14', 'Defenders', 'Midfielders', NULL),
('34', 'Goalies', 'Midfielders', NULL),
('24', 'Forwards', 'Midfielders', NULL),
('234', 'Forwards', 'Goalies', 'Midfielders');

INSERT INTO game(leagueName, seasonID, cupID, date, hostScore, guestScore, hostTeam, guestTeam)
VALUES ('La Liga', '2018-2019', NULL, '2018-10-20', 4, 2, 'Barcelona', 'Sevilla'),
('Serie A', '2018-2019', NULL, '2018-09-29', 3, 1, 'Juventus', 'Napoli'),
('La Liga', '2018-2019', NULL, '2018-09-26', 3, 0, 'Sevilla', 'Real Madrid'),
('Premier League', '2018-2019', NULL, '2018-10-07', 0, 0, 'Liverpool', 'Manchester City'),
('La Liga', '2017-2018', NULL, '2017-10-1', 2,2, 'Barcelona', 'Real Madrid'),
('La Liga', '2017-2018', NULL, NULL, 0,3, 'Real Madrid', 'Barcelona'),
('La Liga', '2016-2017', NULL, NULL, 1,1, 'Barcelona', 'Real Madrid'),
('La Liga', '2016-2017', NULL, NULL, 2,3, 'Real Madrid', 'Barcelona'),
('La Liga', '2017-2018', NULL, NULL, 4,1, 'Real Madrid', 'Sevilla'),
('La Liga', '2017-2018', NULL, NULL, 2,1, 'Sevilla', 'Real Madrid'),
('La Liga', '2017-2018', NULL, '2017-08-27', 2,2, 'Real Madrid', 'Valencia'),
('La Liga', '2017-2018', NULL, '2017-10-28', 0,2, 'Athletic Bilbao', 'Barcelona'),
(NULL, '2018', 18, '2018-07-16', 1,1, 'Argentina', 'Iceland'),
('La Liga', '2017-2018', NULL, NULL, 'Real Madrid', 'Barcelona', 2, 1),
('La Liga', '2017-2018', NULL, NULL, 0,3, 'Sevilla', 'Barcelona'),
('La Liga', '2017-2018', NULL, NULL, 0,3, 'Barcelona', 'Athletic Bilbao');


INSERT INTO gameStat(gameID, playerID, seasonID, length, duals, redCard, yellowCard, goals, passes, attempts, defensive)
VALUES ('Lionel Messi', '2018-2019', 90, NULL, 0,0,1,NULL, 2, 0),
('Lionel Messi', '2016-2017', 90, NULL, 0,1,1,NULL, 5, 0),
('Lionel Messi', '2016-2017', 32, NULL, 0,0,1,NULL, 4, 0),
('Lionel Messi', '2017-2018', 90, NULL, 0,1,1,NULL, 5, 0),
('Lionel Messi', '2017-2018', 90, NULL, 0,0,0, NULL, 6, 0),
('Lionel Messi', '2017-2018', 90, NULL, 0,1,1, NULL, 5, 0),
('Lionel Messi', '2017-2018', 90, NULL, 0,0,0, NULL, 6, 0),
('Lionel Messi', '2017-2018', 90, NULL, 0,0,1, NULL, 5, 0),
('Lionel Messi', '2017-2018', 23, NULL, 0,0,0, NULL, 1, 0),
('Cristiano Ronaldo', '2018-2019', 90, NULL, 0, 0, 0, NULL, 8, 1),
('Gareth Bale', '2018-2019', 90, NULL, 0, 1, 0, NULL, 8, 2),
('Sergio Ramos', '2017-2018', 90, NULL, 0, 1, 1, NULL, 3, 0),
('Gareth Bale', '2018-2019', 18, NULL, 0, 0, 0, NULL, 2, 0), 
('Sergio Ramos', '2016-2017', 90, NULL, 0,0,1, NULL, 2, 4),
('Sergio Ramos', '2016-2017', 77, NULL, 1, 0, 0, NULL, 2, 4),
('Sergio Ramos', '2017-2018', 90, NULL, 0,0,0, NULL, 1, 9),
('Sergio Ramos', '2017-2018', 90, NULL, 0,0,0, NULL, 2, 1),
('Sergio Ramos', '2018-2019', 90, NULL, 0,0,0, NULL, 2,0),
('Sergio Ramos', '2017-2018', 90, NULL, 0,0,0, NULL, 2,0),
('Sergio Ramos', '2017-2018', 90,NULL, 0,0,0, NULL, 2,0),
('Lionel Messi', '2018', 90,NULL, 0,0,0, NULL, 2,0);




