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
	echo"<div>";
	echo "<img src='../img/" .$character['avatar'] ."'>";
	echo "<p>".$character['name']. "</p>";
	echo "<p> health:".$character['health']."</p>";
	echo "<p> defense:".$character['defense']."</p>";
	echo "<p> attack:".$character['attack']. "</P>";
	echo "<p> weapon:".$character['weapon']. "</P>";
	echo "<p> armor:".$character['armor']. "</P>";
	echo "<p>".$character['bio']. "</P>";

	echo"</div>";
}

?>




<div class="footer">
<h3 id="footertext"> @ kimberly van berkum 2020</h3> 

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../main.css">
<title></title>
</head>
</body>
</html>


