<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $vraag1 = test_input($_POST["huisdier"]);
        $vraag2 = test_input($_POST["persoon"]);
        $vraag3 = test_input($_POST["land"]);
        $vraag4 = test_input($_POST["bored"]);
        $vraag5 = test_input($_POST["toys"]);
        $vraag6 = test_input($_POST["docent"]);
        $vraag7 = test_input($_POST["money"]);
        $vraag8 = test_input($_POST["busy"]);
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Knewave&display=swap" rel="stylesheet">
        <title>Madlibs</title>
    </head>
    <body>
        <h1 id="title">MAD LIBS</h1>
        <div class="main">
            <nav>
                <p><a href="index.html">Er heerst paniek...</a></p>
                <p><a href="onkunde.html">Onkunde</a></p>
            </nav>
            <h1 id="title2">Er heerst paniek...</h1>
            <div class="tekst">
                <?php
                    echo "<p id= \"teksten\">Er heerst paniek in het koninkrijk " .$vraag3.". Koning ".$vraag6." is ten einde raad en als koning ".$vraag6." ten einde raad is, dan roept hij zijn ten-einde-raadsheer ".$vraag2."<br><br>".
                    '"'.$vraag2.'! Het is een ramp! Het is een schande!"<br><br>'.
                    '"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>'.
                    '"Mijn '.$vraag1.'is verdwenen! Zo maar, zonder waarschuwing. En ik had net'.$vraag5.'voor hem gekocht!"<br><br>'.
                    '"Majesteit, uw '.$vraag1.' komt vast vanzelf terug?"<br><br>'.
                    '"Ja, da`s leuk en aardig, maar hoe moet ik in de tussentijd '.$vraag8.' leren?"<br><br>'.
                    '"Maar Sire, daar kunt u toch uw '.$vraag7.' voor gebruiken."<br><br>'.
                    '"'.$vraag2.', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>'.
                    '"'.$vraag4.' Sire."</p>';
                ?>
            </div>
            <div id="footer">
                <p>Deze website is gemaakt door Sam Moekardanoe</p>
            </div>
        </div>
    </body>
</html>