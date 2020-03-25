<?php
$servername = "localhost";
    $username = "heroes1";
    $password = "dordrecht";
    $dbname = "heroes";

        $conn = new PDO('mysql:host=localhost;dbname=heroes', $username, $password);
$statement = $conn->prepare('SELECT * FROM characters WHERE `name` = :inputName');
$statement->execute([":inputName" => urldecode($_GET['name'])]);
$result = $statement->fetchAll();

//     try{
// $conn = new PDO('mysql:host=localhost;dbname=heroes', $username, $password);

// echo "connected succesfully";

// }

// catch(PDOexception $e){
// 	echo " connection failed". $e->getMessage();
// }

$stnt=$conn->prepare("SELECT id, name,avatar,health,attack,defense From characters Order By name");
$stnt ->execute();
$result=$stnt->fetchAll();





?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./main.css">
<link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">

<title></title>
</head>
<h1>alle 10  characters uit de database</h1>
<?php
foreach ($result as $character) {
	echo"<div class= 'alles'>";
	echo '<a href="character.php/?name=' . urlencode($character['name']) . '">';
	echo "<img src='./img/" .$character['avatar'] . "'>";
    echo "<p id='name'>".$character['name']. "</p>";
	echo "<p id='health'> health :".$character['health']."</p>";
	echo "<p id='defense'> defense :".$character['defense']."</p>";
	echo "<p id='attack'> attack :".$character['attack']. "</P>";
echo "</a>";
	echo"</div>";
}

?>
<div class="footer">
<h3 id="footertext"> @ kimberly van berkum 2020</h3>
</body>
</html>


