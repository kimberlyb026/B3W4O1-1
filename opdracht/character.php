<?php
$servername = "localhost";
    $username = "heroes1";
    $password = "dordrecht";
    $dbname = "heroes";

    $conn = new PDO('mysql:host=localhost;dbname=heroes', $username, $password);
$statement = $conn->prepare('SELECT * FROM characters WHERE `name` = :inputName');
$statement->execute([":inputName" => urldecode($_GET['name'])]);
$result = $statement->fetchAll();



foreach ($result as $character) {
echo"<div class= 'avantarnaam'>";
	echo "<h1>".$character['name']. "</h1>";
	echo "</div>";

 echo "<a class= 'knop' href='../indekc.php'>terug</a>";
echo"<div>";

	echo"<div class= 'character'>";
	echo "<img  src='../img/" .$character['avatar'] ."'>";
	echo"</div";

	echo"<div class= 'bio'>";
echo "<p>".$character['bio']. "</P>";
echo"</div>";


echo "</div>";
	

echo "<div style= 'background-color:".$character['color']. "'>";

	echo "<p id='health'> health :".$character['health']."</p>";
	echo "<p id='defense'> defense :".$character['defense']."</p>";
	echo "<p id='attack'> attack :".$character['attack']. "</P>";
	echo "<p id='weapon'> weapon :".$character['weapon']. "</P>";
	echo "<p id='armor'> armor: ".$character['armor']. "</P>";

echo "</div>";

	echo"</div>";
}



?>



<div class="footer1">
<h3 id="footertext"> @ kimberly van berkum 2020</h3> 

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../main.css">
<link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
<title></title>
</head>
</body>
</html>


