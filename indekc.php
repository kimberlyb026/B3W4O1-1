<?php
$servername = "localhost";
    $username = "heroes1";
    $password = "dordrecht";
    $dbname = "heroes";
$conn = new PDO('mysql:host=localhost;dbname=heroes', $username, $password);


?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<title></title>
</head>
<h1>alle 10  characters uit de database</h1>

<img src="img/bowser.jpg">
<img src="img/buffy.jpg">
<img src="img/buzz.jpg">
<img src="img/captianamerica.jpg">
<img src="img/catwoman.jpg">
<img src="img/conan.jpg">
<img src="img/mario.jpg">
<img src="img/quinn.jpg">
<img src="img/shrek.jpg">
<img src="img/zelda.jpg">

<div class="footer">
<h3 id="footertext"> @ kimberly van berkum 2020</h3>
</body>
</html>


