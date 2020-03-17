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
<p> Er heerst paniek in het koninkrijk <?= $_POST['vraag3']?>  Koning <?= $_POST['vraag6']?> is ten einde raad en als koning <?= $_POST['vraag6']?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?= $_POST['vraag2']?></p>
<p>  "<?= $_POST['vraag2']?>! Het is een ramp! Het is een schande!" </p>
<p>"Sire,Majesteit, Uwe luidruchtigheid, wat is er aan de hand?" </p>
<p>"Mijn <?= $_POST['vraag1']?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?= $_POST['vraag5']?> voor hem gekocht!" </p>
<p>"Majesteit, uw <?= $_POST['vraag1']?> komt vast vanzelf weer terug?" </p>
<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?= $_POST['vraag8']?> leren?"</p>
<p>"Maar Sire, daar kunt u toch uw <?= $_POST['vraag7']?> voor gebruiken"</p>
<p>" <?= $_POST['vraag2']?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had"</p>
<p>"<?= $_POST['vraag4']?>, Sire"</p>



</div>

</body>
</html>