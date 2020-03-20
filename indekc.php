<?php
$servername = "localhost";
    $username = "heroes1";
    $password = "dordrecht";
    $dbname = "heroes";

    try{
$conn = new PDO('mysql:host=localhost;dbname=heroes', $username, $password);

echo "connected succesfully";

}

catch(PDOexception $e){
	echo " connection failed". $e->getMessage();
}

$stnt=$conn->prepare("SELECT id, name,avatar,health,attack,defense From characters Order By name");
$stnt ->execute();
$result=$stnt->fetchAll();





?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./main.css">
<title></title>
</head>
<h1>alle 10  characters uit de database</h1>
<?php
foreach ($result as $character) {
	echo"<div>";
	echo '<a href="character.php/?name=' . urlencode($character['name']) . '">';
	echo "<img src='./img/" .$character['avatar'] . "'>";
    echo "<p>".$character['name']. "</p>";
	echo "<p> health:".$character['health']."</p>";
	echo "<p> defense:".$character['defense']."</p>";
	echo "<p> attack:".$character['attack']. "</P>";

	echo"</div>";
}

?>
<div class="footer">
<h3 id="footertext"> @ kimberly van berkum 2020</h3>
</body>
</html>


