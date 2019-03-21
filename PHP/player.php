<!DOCTYPE html>
<html lang="en">
<title>Football Club</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Amatic SC", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="league.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LEAGUE</a>
    <a href="searchclub.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CLUB</a>
    <a href="searchplayer.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PLAYER</a>
    <a href="searchgame.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">GAME</a>
    <a href="datawarehouse.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">DATA WAREHOUSE</a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="home.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="league.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">LEAGUE</a>
  <a href="searchclub.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CLUB</a>
  <a href="searchplayer.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PLAYER</a>
  <a href="searchgame.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">GAME</a>
  <a href="datawarehouse.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">DATA WAREHOUSE</a>
</div>
</div>

<div class="w3-container w3-content w3-center w3-padding-64" style="width:60%" id="band">
<?php

// Connection parameters 
$host = 'mpcs53001.cs.uchicago.edu';
$username = 'ruxin';
$password = 'PhuS1Ees';
$database = $username.'DB';
echo '<h2 class="w3-wide">'.strtoupper($_GET["value"]).'</h2>';

// Attempting to connect 
$dbcon = mysqli_connect($host, $username, $password, $database)
   or die('Could not connect: ' . mysqli_connect_error());

// Selecting a database
//   Unnecessary in this case because we have already selected 
//   the right database with the connect statement.  
mysqli_select_db($dbcon, $database)
   or die('Could not select database');

$query0 = "SELECT DISTINCT name, age, height, country FROM playerInfo WHERE name = '{$_GET["value"]}' ";
$result0 = mysqli_query($dbcon, $query0)
  or die('Query Failed: ' . mysqli_error());

echo '<div class="w3-container w3-padding-16 w3-center">';
echo "<p class=w3-center>PLAYER INFORMATION<br>";
if (mysqli_num_rows($result0) == 0){
    echo '<div class="w3-container w3-padding-16 w3-center">';
    echo "<p class=w3-center>NO PLAYER INFORMATION IN THE DATASET";
    echo "<p class=w3-center>YOU ARE WELCOMED TO ADD SOME!";
}
else {

echo '<table  style="width:100%">';
echo '<tr style= "text-align:center">';
echo '<th style= "text-align:center">Name</th>';
echo '<th style= "text-align:center">Age</th>';
echo '<th style= "text-align:center">Height</th>';
echo '<th style= "text-align:center">Country</th>';
echo '</tr>'; 
while ($tuple0 = mysqli_fetch_row($result0)) {
echo '<tr style= "text-align:center">';
echo '<td style= "text-align:center">'.$tuple0[0].'</td>';
echo '<td style= "text-align:center">'.$tuple0[1].'</td>';
echo '<td style= "text-align:center">'.$tuple0[2].' cm</td>';
echo '<td style= "text-align:center">'.$tuple0[3].'</td>';
echo '</tr>';
}
echo '</table>';
echo '</div>';}



$query1 = "SELECT season.seasonID, season.clubname, season.squadNumber, 
PAC, DRI, SHO, DEF, PAS, PHY FROM season 
WHERE season.playerID = '{$_GET["value"]}' ";
$result1 = mysqli_query($dbcon, $query1)
  or die('Query Failed: ' . mysqli_error());

echo '<div class="w3-container w3-padding-16 w3-center">';
echo "<p class=w3-center>PLAYER TECHNICAL PROFILE<br>";

if (mysqli_num_rows($result0) == 0){
    echo '<div class="w3-container w3-padding-16 w3-center">';
    echo "<p class=w3-center>NO PLAYER TECH DATA IN THE DATASET";
    echo "<p class=w3-center>YOU ARE WELCOMED TO ADD SOME!";
}
else {

// Printing player names in HTML
echo '<table  style="width:100%">';
echo '<tr style= "text-align:center">';
echo '<th style= "text-align:center">Season</th>';
echo '<th style= "text-align:center">Club</th>';
echo '<th style= "text-align:center">Squad Number</th>';
echo '<th style= "text-align:center">PAC</th>';
echo '<th style= "text-align:center">DRI</th>';
echo '<th style= "text-align:center">SHO</th>'; 
echo '<th style= "text-align:center">DEF</th>'; 
echo '<th style= "text-align:center">PAS</th>'; 
echo '<th style= "text-align:center">PHY</th>'; 
echo '</tr>'; 
while ($tuple1 = mysqli_fetch_row($result1)) {
echo '<tr style= "text-align:center">';
echo '<td style= "text-align:center">'.$tuple1[0].'</td>';
echo '<td style= "text-align:center">';
echo "<a class=sans href='club.php?value={$tuple1[1]}'>".$tuple1[1]."</a></td>";
echo '<td style= "text-align:center">'.$tuple1[2].'</td>';
echo '<td style= "text-align:center">'.$tuple1[3].'</td>';
echo '<td style= "text-align:center">'.$tuple1[4].'</td>';
echo '<td style= "text-align:center">'.$tuple1[5].'</td>';
echo '<td style= "text-align:center">'.$tuple1[6].'</td>';
echo '<td style= "text-align:center">'.$tuple1[7].'</td>';
echo '<td style= "text-align:center">'.$tuple1[8].'</td>';
echo '</tr>';
}
echo '</table>';
echo '</div>';
}

echo '<div class="w3-container w3-padding-16 w3-center">';
echo "<p class=w3-center>GAME PERFORMANCE<br>";
$query2 = "SELECT gameID, seasonID, goals, yellowCard, 
redCard, attempts, defensive
FROM gameStat WHERE playerID = '{$_GET["value"]}' ";
$result2 = mysqli_query($dbcon, $query2)
  or die('Query Failed: ' . mysqli_error());

// Printing player names in HTML

echo '<table class="fontsize" style="width:100%">';
echo '<tr style= "text-align:center">';
echo '<th style= "text-align:center">Game ID</th>';
echo '<th style= "text-align:center">Season</th>';
echo '<th style= "text-align:center">Goals</th>';
echo '<th style= "text-align:center">Red Card</th>';
echo '<th style= "text-align:center">Yellow Card</th>';
echo '<th style= "text-align:center">Attempts</th>';
echo '<th style= "text-align:center">Defensive Actions</th>'; 
echo '</tr>'; 
while ($tuple2 = mysqli_fetch_row($result2)) {
echo '<tr style= "text-align:center">';
echo '<td style= "text-align:center">'.$tuple2[0].'</td>';
echo '<td style= "text-align:center">'.$tuple2[1].'</td>';
echo '<td style= "text-align:center">'.$tuple2[2].'</td>';
echo '<td style= "text-align:center">'.$tuple2[3].'</td>';
echo '<td style= "text-align:center">'.$tuple2[4].'</td>';
echo '<td style= "text-align:center">'.$tuple2[5].'</td>';
echo '<td style= "text-align:center">'.$tuple2[6].'</td>';
echo '</tr>';
}
echo '</table>';
echo '</div>';


echo '<div class="w3-container w3-padding-16 w3-center">';
echo "<p class=w3-center>AVG PERFORMANCE<br>";
$query3 = "SELECT seasonID, ROUND(AVG(goals),2), ROUND(AVG(yellowCard),2), 
ROUND(AVG(redCard),2), ROUND(AVG(attempts),2), ROUND(AVG(defensive),2)
FROM gameStat WHERE playerID = '{$_GET["value"]}' GROUP BY seasonID ";
$result3 = mysqli_query($dbcon, $query3)
  or die('Query Failed: ' . mysqli_error());

// Printing player names in HTML
if (mysqli_num_rows($result0) == 0){
    echo '<div class="w3-container w3-padding-16 w3-center">';
    echo "<p class=w3-center>NO GAME DATA IN THE DATASET";
    echo "<p class=w3-center>YOU ARE WELCOMED TO ADD SOME!";
}
else {


echo '<table class="fontsize" style="width:100%">';
echo '<tr style= "text-align:center">';
echo '<th style= "text-align:center">Season</th>';
echo '<th style= "text-align:center">Avg goals</th>';
echo '<th style= "text-align:center">Avg red card</th>';
echo '<th style= "text-align:center">Avg yellow card</th>';
echo '<th style= "text-align:center">Avg attempts</th>';
echo '<th style= "text-align:center">Avg defensive actions</th>'; 
echo '</tr>'; 
while ($tuple3 = mysqli_fetch_row($result3)) {
echo '<tr style= "text-align:center">';
echo '<td style= "text-align:center">'.$tuple3[0].'</td>';
echo '<td style= "text-align:center">'.$tuple3[1].'</td>';
echo '<td style= "text-align:center">'.$tuple3[2].'</td>';
echo '<td style= "text-align:center">'.$tuple3[3].'</td>';
echo '<td style= "text-align:center">'.$tuple3[4].'</td>';
echo '<td style= "text-align:center">'.$tuple3[5].'</td>';
echo '</tr>';
}
echo '</table>';
echo '</div>';
}


// Free result
mysqli_free_result($result0);
mysqli_free_result($result1);
mysqli_free_result($result2);
mysqli_free_result($result3);
// Closing connection
mysqli_close($dbcon);
?>
</div>

<div class="w3-content" style="max-width:2000px;margin-top:32px">

<!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-32" style="width:80%" id="band">
  <h2 class="w3-wide">HELP US IMPROVE OUR DATABASE!</h2>
  <div class="w3-row w3-padding-32">       
    <p class="w3-opacity w3-center"><i>UPDATE PLAYER INFO</i></p>
    <form action="updateinfo.php" target="_blank">
    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
      <div class="w3-quarter">
        <input class="w3-input w3-border" type="text" placeholder="Player Name" required name="playerName">
        </div>
        <div class="w3-quarter">
        <input class="w3-input w3-border" type="text" placeholder="Age" required name="age">
        </div>
        <div class="w3-quarter">
        <input class="w3-input w3-border" type="text" placeholder="Height" required name="height">
        </div>
        <div class="w3-quarter">
        <input class="w3-input w3-border" type="text" placeholder="Country" required name="country">
        </div>
      </div>
      <button class="w3-button w3-black w3-section w3-right" type="submit">UPDATE!</button>
      </form>
      </div>
    <div class="w3-row w3-padding-32">        
    <p class="w3-opacity w3-center"><i>ADD PLAYER TECH PROFILE</i></p>
    <form action="inserttech.php" target="_blank">
    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
      <div class="w3-col" style="width:14.5%">
      <input class="w3-input w3-border" type="text" placeholder="Player Name" required name="playerName">
        </div>
      <div class="w3-col" style="width:14.5%">
      <input class="w3-input w3-border" type="text" placeholder="Season, e.g. 2017-2018" required name="Season">
        </div>
        <div class="w3-col" style="width:14.5%">
        <input class="w3-input w3-border" type="text" placeholder="Club Name" required name="clubName">
        </div>
        <div class="w3-col" style="width:14.5%">
        <input class="w3-input w3-border" type="text" placeholder="Squad Number" required name="squad">
        </div>
        <div class="w3-col" style="width:7%">
        <input class="w3-input w3-border" type="text" placeholder="PAC" required name="pac">
        </div>
        <div class="w3-col" style="width:7%">
        <input class="w3-input w3-border" type="text" placeholder="DRI" required name="dri">
        </div>
                <div class="w3-col" style="width:7%">
        <input class="w3-input w3-border" type="text" placeholder="SHO" required name="sho">
        </div>
                <div class="w3-col" style="width:7%">
        <input class="w3-input w3-border" type="text" placeholder="DEF" required name="def">
        </div>
                <div class="w3-col" style="width:7%">
        <input class="w3-input w3-border" type="text" placeholder="PAS" required name="pas">
        </div>
                <div class="w3-col" style="width:7%">
        <input class="w3-input w3-border" type="text" placeholder="PHY" required name="phy">
        </div>
      </div>
      <button class="w3-button w3-black w3-section w3-right" type="submit">UPDATE!</button>
      </form>
    <div class="w3-row w3-padding-32">        
    <p class="w3-opacity w3-center"><i>UPDATE PLAYER TECH PROFILE</i></p>
    <form action="updatetech.php" target="_blank">
    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
      <div class="w3-col" style="width:14.5%">
      <input class="w3-input w3-border" type="text" placeholder="Player Name" required name="playerName">
        </div>
      <div class="w3-col" style="width:14.5%">
      <input class="w3-input w3-border" type="text" placeholder="Season, e.g. 2017-2018" required name="Season">
        </div>
        <div class="w3-col" style="width:14.5%">
        <input class="w3-input w3-border" type="text" placeholder="Club Name" required name="clubName">
        </div>
        <div class="w3-col" style="width:14.5%">
        <input class="w3-input w3-border" type="text" placeholder="Squad Number" required name="squad">
        </div>
        <div class="w3-col" style="width:7%">
        <input class="w3-input w3-border" type="text" placeholder="PAC" required name="pac">
        </div>
        <div class="w3-col" style="width:7%">
        <input class="w3-input w3-border" type="text" placeholder="DRI" required name="dri">
        </div>
                <div class="w3-col" style="width:7%">
        <input class="w3-input w3-border" type="text" placeholder="SHO" required name="sho">
        </div>
                <div class="w3-col" style="width:7%">
        <input class="w3-input w3-border" type="text" placeholder="DEF" required name="def">
        </div>
                <div class="w3-col" style="width:7%">
        <input class="w3-input w3-border" type="text" placeholder="PAS" required name="pas">
        </div>
                <div class="w3-col" style="width:7%">
        <input class="w3-input w3-border" type="text" placeholder="PHY" required name="phy">
        </div>
      </div>
      <button class="w3-button w3-black w3-section w3-right" type="submit">UPDATE!</button>
      </form>
      </div><div class="w3-row w3-padding-32">        
    <p class="w3-opacity w3-center"><i>ADD GAME PERFORMANCE</i></p>
    <form action="updatetech.php" target="_blank">
    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
      <div class="w3-col" style="width:16.67%">
      <input class="w3-input w3-border" type="text" placeholder="Season, e.g. 2017-2018" required name="Season">
        </div>
        <div class="w3-col" style="width:16.6%">
        <input class="w3-input w3-border" type="text" placeholder="Goals" required name="goals">
        </div>
        <div class="w3-col" style="width:16.66%">
        <input class="w3-input w3-border" type="text" placeholder="Red Card" required name="red">
        </div>
        <div class="w3-col" style="width:16.66%">
        <input class="w3-input w3-border" type="text" placeholder="Yellow Card" required name="yellow">
        </div>
        <div class="w3-col" style="width:16.67%">
        <input class="w3-input w3-border" type="text" placeholder="Attempts" required name="attempts">
        </div>
                <div class="w3-col" style="width:16.67%">
        <input class="w3-input w3-border" type="text" placeholder="Defensive Actions" required name="defensive">
        </div>
      </div>
      <button class="w3-button w3-black w3-section w3-right" type="submit">UPDATE!</button>
      </form>
      </div>

    </div>
</div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">WRITTEN BY RUXIN CHEN</p>
</footer>
</div>


</body>
</html>



