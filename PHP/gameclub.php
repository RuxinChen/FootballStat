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
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="about.php" class="w3-bar-item w3-button">ABOUT THE WEBSITE</a>
        <a href="report.php" class="w3-bar-item w3-button">REPORT</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="home.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="league.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">LEAGUE</a>
  <a href="searchclub.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CLUB</a>
  <a href="searchplayer.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PLAYER</a>
  <a href="searchgame.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">GAME</a>
</div>
</div>


<div class="w3-container w3-content w3-center w3-padding-64" style="width:60%" id="band">
<?php

// Connection parameters 
$host = 'mpcs53001.cs.uchicago.edu';
$username = 'ruxin';
$password = 'PhuS1Ees';
$database = $username.'DB';

// Attempting to connect 
$dbcon = mysqli_connect($host, $username, $password, $database)
   or die('Could not connect: ' . mysqli_connect_error());

// Selecting a database
//   Unnecessary in this case because we have already selected 
//   the right database with the connect statement.  
mysqli_select_db($dbcon, $database)
   or die('Could not select database');


if ($_GET["club1"] AND $_GET["club2"]){
  $query = " (SELECT gameID, seasonID, date, hostTeam, 
  guestTeam, hostScore, guestScore FROM game 
  WHERE guestTeam = '{$_GET["club1"]}' AND hostTeam = '{$_GET["club2"]}')
  UNION 
  (SELECT gameID, seasonID, date, hostTeam, 
  guestTeam, hostScore, guestScore FROM game 
  WHERE guestTeam = '{$_GET["club2"]}' AND hostTeam = '{$_GET["club1"]}') ";
  $result = mysqli_query($dbcon, $query)
  or die('Query Failed: ' . mysqli_error());
// Printing player names in HTML


echo '<div class="w3-container w3-padding-16 w3-center">';
echo "<p class=w3-center>GAMES PLAYED";
echo "</div>";

if (mysqli_num_rows($result) == 0){
    echo '<div class="w3-container w3-padding-16 w3-center">';
    echo "<p class=w3-center>NO GAME DATA IN THE DATASET";
    echo "<p class=w3-center>YOU ARE WELCOMED TO ADD SOME!";
    echo "</div>";
}
else {

echo '<table  style="width:100%">';
echo '<tr style= "text-align:center">';
echo '<th style= "text-align:center">Game ID</th>';
echo '<th style= "text-align:center">Season</th>';
echo '<th style= "text-align:center">Date</th>';
echo '<th style= "text-align:center">Host Team</th>';
echo '<th style= "text-align:center">Guest Team</th>';
echo '<th style= "text-align:center">Host Score</th>';
echo '<th style= "text-align:center">Guest Score</th>'; 
echo '</tr>'; 
while ($tuple = mysqli_fetch_row($result)) {
echo '<tr style= "text-align:center">';
echo '<td style= "text-align:center">'.$tuple[0].'</td>';
echo '<td style= "text-align:center">'.$tuple[1].'</td>';
echo '<td style= "text-align:center">'.$tuple[2].'</td>';
echo '<td style= "text-align:center">'.$tuple[3].'</td>';
echo '<td style= "text-align:center">'.$tuple[4].'</td>';
echo '<td style= "text-align:center">'.$tuple[5].'</td>';
echo '<td style= "text-align:center">'.$tuple[6].'</td>';
echo '</tr>';
}
echo '</table>';}
} 
  elseif ($_GET['club1']) {
  $query = "(SELECT gameID, seasonID, date, hostTeam,
  guestTeam, hostScore, guestScore FROM game 
  WHERE guestTeam = '{$_GET["club1"]}') UNION 
  (SELECT gameID, seasonID, date, hostTeam,
  guestTeam, hostScore, guestScore FROM game 
  WHERE hostTeam = '{$_GET["club1"]}') ";
  $result = mysqli_query($dbcon, $query)
  or die('Query Failed 2: ' . mysqli_error());
  echo '<div class="w3-container w3-padding-16 w3-center">';
  echo "<p class=w3-center>GAMES PLAYED";
  echo "</div>";

  if (mysqli_num_rows($result) == 0){
    echo '<div class="w3-container w3-padding-16 w3-center">';
    echo "<p class=w3-center>NO GAME DATA IN THE DATASET";
    echo "<p class=w3-center>YOU ARE WELCOMED TO ADD SOME!";
    echo "</div>";
}
else {


// Printing player names in HTML
echo '<table  style="width:100%">';
echo '<tr style= "text-align:center">';
echo '<th style= "text-align:center">Game ID</th>';
echo '<th style= "text-align:center">Season</th>';
echo '<th style= "text-align:center">Date</th>';
echo '<th style= "text-align:center">Host Team</th>';
echo '<th style= "text-align:center">Guest Team</th>';
echo '<th style= "text-align:center">Host Score</th>';
echo '<th style= "text-align:center">Guest Score</th>'; 
echo '</tr>'; 
while ($tuple = mysqli_fetch_row($result)) {
echo '<tr style= "text-align:center">';
echo '<td style= "text-align:center">'.$tuple[0].'</td>';
echo '<td style= "text-align:center">'.$tuple[1].'</td>';
echo '<td style= "text-align:center">'.$tuple[2].'</td>';
echo '<td style= "text-align:center">'.$tuple[3].'</td>';
echo '<td style= "text-align:center">'.$tuple[4].'</td>';
echo '<td style= "text-align:center">'.$tuple[5].'</td>';
echo '<td style= "text-align:center">'.$tuple[6].'</td>';
echo '</tr>';
}
echo '</table>'; }
}elseif ($_GET['club2']) {
  $query = "(SELECT gameID, seasonID, date, hostTeam,
  guestTeam, hostScore, guestScore FROM game 
  WHERE guestTeam = '{$_GET["club2"]}') UNION 
  (SELECT gameID, seasonID, date, hostTeam,
  guestTeam, hostScore, guestScore FROM game 
  WHERE hostTeam = '{$_GET["club2"]}') ";
    $result = mysqli_query($dbcon, $query)
  or die('Query Failed 3: ' . mysqli_error());
  echo '<div class="w3-container w3-padding-16 w3-center">';
  echo "<p class=w3-center>GAMES PLAYED";
  echo "</div>";

  if (mysqli_num_rows($result) == 0){
    echo '<div class="w3-container w3-padding-16 w3-center">';
    echo "<p class=w3-center>NO GAME DATA IN THE DATASET";
    echo "<p class=w3-center>YOU ARE WELCOMED TO ADD SOME!";
    echo "</div>";
}
else {


// Printing player names in HTML
echo '<table  style="width:100%">';
echo '<tr style= "text-align:center">';
echo '<th style= "text-align:center">Game ID</th>';
echo '<th style= "text-align:center">Season</th>';
echo '<th style= "text-align:center">Date</th>';
echo '<th style= "text-align:center">Host Team</th>';
echo '<th style= "text-align:center">Guest Team</th>';
echo '<th style= "text-align:center">Host Score</th>';
echo '<th style= "text-align:center">Guest Score</th>'; 
echo '</tr>'; 
while ($tuple = mysqli_fetch_row($result)) {
echo '<tr style= "text-align:center">';
echo '<td style= "text-align:center">'.$tuple[0].'</td>';
echo '<td style= "text-align:center">'.$tuple[1].'</td>';
echo '<td style= "text-align:center">'.$tuple[2].'</td>';
echo '<td style= "text-align:center">'.$tuple[3].'</td>';
echo '<td style= "text-align:center">'.$tuple[4].'</td>';
echo '<td style= "text-align:center">'.$tuple[5].'</td>';
echo '<td style= "text-align:center">'.$tuple[6].'</td>';
echo '</tr>';
}
echo '</table>';}
}else{
  echo '<div class="w3-container w3-content w3-center w3-padding-32" style="width:80%" id="band">';
  echo '<h2 class="w3-wide">PLEASE MAKE A SELECTION!</h2>';
  echo '</div>';

}

mysqli_free_result($result);
// Closing connection
mysqli_close($dbcon);
?>

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



