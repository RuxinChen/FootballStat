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

<div class="w3-content" style="max-width:2000px;margin-top:46px">


<!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="width:60%" id="band">
    <h2 class="w3-wide w3-padding-48">THE LEAGUE</h2>
      <div class="w3-row w3-padding-32">
      <div class="w3-col", style="width:20%">
        <a href="EuroLeague.php?value=Premier League">Premier League</a>
        <img src="images/premier.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:80%">
      </div>
      <div class="w3-col", style="width:20%">
        <a href="EuroLeague.php?value=Leauge 1">League 1</a>
        <img src="images/league1.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:80%">
      </div>
      <div class="w3-col", style="width:20%">
        <a href="EuroLeague.php?value=Bundesliga">Bundesliga</a>
        <img src="images/bundesliga.png" class="w3-round w3-margin-bottom" " alt="Random Name" style="width:80%">
      </div>
      <div class="w3-col", style="width:20%">
        <a href="EuroLeague.php?value=Serie A">Serie A</a>
        <img src="images/serieA.jpg" class="w3-round w3-margin-bottom" " alt="Random Name" style="width:80%">
      </div>
       <div class="w3-col", style="width:20%">
        <a href="EuroLeague.php?value=La Liga">La Liga</a>
        <img src="images/laliga.png" class="w3-round w3-margin-bottom" " alt="Random Name" style="width:70%">
      </div>
    </div>
</div>
</div>


<div>
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
