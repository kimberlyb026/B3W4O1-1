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

	echo "<p class='health1'> health :".$character['health']."</p>";
	echo "<p class='defense1'> defense :".$character['defense']."</p>";
	echo "<p class='attack1'> attack :".$character['attack']. "</P>";
	echo "<p id='weapon1'> weapon :".$character['weapon']. "</P>";
	echo "<p id='armor1'> armor: ".$character['armor']. "</P>";

echo "</div>";

	echo"</div>";
}



?>



<div class="footer1">
<?php include "./footer.php";?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../main.css">
<link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
<title></title>
</head>
</body>
</html>


