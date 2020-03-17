<?php

 session_start();




?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="paniek.css">
<title>paniek</title>
</head>

<div class= verhaal>
<p> Er zijn veel mensen die niet kunnen <?= $_POST['vraag1']?>. Neem nou <?= $_POST['vraag2']?>. Zelfs met de hulp van een <?= $_POST['vraag3']?> of zelfs <?= $_POST['vraag4']?> kan <?= $_POST['vraag2']?> niet <?= $_POST['vraag1']?>. Dat heeft niet te maken met een gebrek aan <?= $_POST['vraag5']?>, maar met een te veel aan <?= $_POST['vraag6']?>. Teveel <?= $_POST['vraag6']?> leidt tot <?= $_POST['vraag7']?> en dat is niet goed als je wilt <?= $_POST['vraag1']?>. Helaas voor <?= $_POST['vraag2']?>


</div>
</body>
</html>

