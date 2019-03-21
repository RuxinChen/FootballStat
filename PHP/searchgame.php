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

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="home.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="league.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">LEAGUE</a>
  <a href="searchclub.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CLUB</a>
  <a href="searchplayer.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PLAYER</a>
  <a href="searchgame.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">GAME</a>
</div>
</div>


<div class="w3-container w3-content w3-center w3-padding-64" style="width:100%" id="band">
<div class="w3-row w3-center w3-padding-64">
  <h2 class="w3-container w3-content w3-center w3-padding-16">SEARCH FOR GAME</h2>     
  <form action="gameleague.php">
  <p class="w3-opacity w3-center w3-padding-16"><i>CHOOSE LEAGUE</i></p>
    <div class="w3-col">
    <input type="radio" value="Premier League" name = 'league'>PREMIER LEAGUE<br>
    <input type="radio" value="League1" name = 'league'>LEAGUE 1<br>
    <input type="radio" value="Bundesliga" name = 'league'>BUNDESLIGA<br>
  <input type="radio" value="serie A" name = 'league'>SERIE A<br>
  <input type="radio" value="La Liga" name = 'league'>LA LIGA<br>
  <button class="w3-button w3-black w3-section w3-right" type="submit">SEARCH!</button>
  </div>
  </form>
</div>
<div class="w3-row w3-center w3-padding-32">
  <form action="gameclub.php">
  <p class="w3-opacity w3-center w3-padding-16"><i>ENTER CLUB</i></p>
    <div class="w3-col" style="width:48%">
    <input class="w3-input w3-border" type="text" placeholder="CLUB ONE" name="club1">
    </div>
  <div class="w3-col", style="width:4%">
      <p></p></div>
    <div class="w3-col" style="width:48%">
    <input class="w3-input w3-border" type="text" placeholder="CLUB TWO" name="club2">
    </div>
    <button class="w3-button w3-black w3-section w3-right" type="submit">SEARCH!</button>      
</form>
  </div>
  </div>


<div class="w3-content" style="max-width:2000px">

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-xlarge">
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



