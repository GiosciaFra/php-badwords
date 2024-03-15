<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>

    <h2>Risultato:</h2>

    <?php

    $paragraph = $_GET['paragraph'];
    $bad_word = $_GET['bad_word'];

    // Stampo il paragrafo e la sua lunghezza
    echo "<p><strong>Paragrafo:</strong> $paragraph</p>";
    echo "<p><strong>Lunghezza del paragrafo:</strong> " . strlen($paragraph) . "</p>";

    // Sostituisco la parola da censurare con ***
    $censored_paragraph = str_replace($bad_word, '***', $paragraph);

    // Stampo il paragrafo censurato e la sua lunghezza
    echo "<p><strong>Paragrafo Censurato:</strong> $censored_paragraph</p>";

    echo "<p><strong>Lunghezza del paragrafo censurato:</strong> " . strlen($censored_paragraph) . "</p>";

    ?>



</body>

</html>