<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>

    <h1>Ciao</h1>

    <?php

    ini_set('display_errors', 1);

    ini_set('display_startup_errors', 1);

    error_reporting(E_ALL);



    ?>

    <h2>Inserisci il tuo paragrafo e la relativa parola da censurare:</h2>
    <form action="result.php" method="GET">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea id="paragraph" name="paragraph"></textarea><br>
        <label for="bad_word">Parola da censurare:</label><br>
        <input type="text" id="bad_word" name="bad_word"><br><br>
        <input type="submit" value="Invia">
    </form>

</body>

</html>