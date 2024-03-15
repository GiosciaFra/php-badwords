<!DOCTYPE html>

<?php

$paragraph = $_GET['paragraph'];
$bad_word = $_GET['bad_word'];

$censored_paragraph = str_replace($bad_word, '***', $paragraph);
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class=" bg-dark text-white-50">

    <div class=" container d-flex justify-content-center flex-column align-items-center text-center py-5 mt-2 border
    border-5 border-danger rounded-5 ">


        <h1 class="pb-4 ">Risultato</h1>



        <!-- Stampo il paragrafo e la sua lunghezza -->
        <p class=" border border-4 border-danger rounded-4 p-4">
            <strong>Paragrafo:</strong><br>

            <?php echo $paragraph ?>

        </p>


        <p class=" border border-4 border-danger rounded-4 p-4">

            <strong>Lunghezza del paragrafo:</strong><br>
            <?php echo strlen($paragraph) ?>
        </p>


        <!-- Stampo il paragrafo censurato e la sua lunghezza -->

        <p class=" border border-4 border-danger rounded-4 p-4">

            <strong>Paragrafo Censurato:</strong><br>
            <?php echo $censored_paragraph ?>
        </p>

        <p class=" border border-4 border-danger rounded-4 p-4">

            <strong>Lunghezza del paragrafo censurato:</strong><br>
            <?php echo strlen($censored_paragraph) ?>
        </p>

    </div>


    <!-- bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

</body>


</html>