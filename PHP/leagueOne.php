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
    <a href="club.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CLUB</a>
    <a href="player.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PLAYER</a>
    <a href="game.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">GAME</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
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
  <a href="club.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CLUB</a>
  <a href="player.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PLAYER</a>
  <a href="game.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">GAME</a>
</div>
</div>

<div class="w3-container w3-content w3-center w3-padding-64" style="width:60%" id="band">
  <h2 class="w3-wide">LEAGUE 1</h2>

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

$query = "SELECT name FROM club WHERE league = 'League 1' ";
#$query = "DESCRIBE club";
$result = mysqli_query($dbcon, $query)
  or die('Query Failed: ' . mysqli_error());

// Printing player names in HTML 
echo '<ul>';
while ($tuple = mysqli_fetch_row($result)) {
  echo "<li><a class=sans href='.$tuple[0].php'>".$tuple[0].'</a></li>';
};
echo '</ul>';

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?>
</div>

<div class="w3-content" style="max-width:2000px;margin-top:16px">

<!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-16" style="width:80%" id="band">
  <h2 class="w3-wide">HELP US TO IMPROVE OUR DATABASE!</h2>
      <div class="w3-row w3-padding-32">
      <div class="w3-col", style="width:48%">       
      <p class="w3-opacity w3-center"><i>ADD NEW CLUB</i></p>
    <form action="addclub.php" target="_blank">
    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
      <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Club Name" required name="Name">
        </div>
        <div class="w3-half">
        <input class="w3-input w3-border" type="text" placeholder="Stadium Name" required name="StadiuamName">
        </div>
      </div>
      <button class="w3-button w3-black w3-section w3-right" type="submit">ADD!</button>
      </form>
      </div>
      <div class="w3-col", style="width:4%">
      <p></p></div>
    <div class="w3-col", style="width:48%">       
      <p class="w3-opacity w3-center"><i>UPDATE CLUB INFO</i></p>
    <form action="updateclub.php" target="_blank">
    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
      <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Club Name" required name="Name">
        </div>
        <div class="w3-half">
        <input class="w3-input w3-border" type="text" placeholder="Stadium Name" required name="StadiumName">
        </div>
      </div>
      <button class="w3-button w3-black w3-section w3-right" type="submit">UPDATE!</button>
      </form>
      </div>
    </div>
</div>
</div>

<!-- Image of location/map -->
<div>
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

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



