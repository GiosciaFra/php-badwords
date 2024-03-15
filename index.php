<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class=" bg-dark text-white-50 ">


    <?php

    ini_set('display_errors', 1);

    ini_set('display_startup_errors', 1);

    error_reporting(E_ALL);



    ?>

    <div
        class="container d-flex justify-content-center flex-column align-items-center text-center py-5 my-5 border border-5 border-danger rounded-5   ">


        <h1 class="pb-4">Inserisci il tuo paragrafo e la relativa parola da censurare</h1>
        <form action="result.php" method="GET">

            <div class=" border border-4 border-danger rounded-4 p-4 mb-3 ">
                <label for="paragraph" class="mb-2">Paragrafo:</label><br>
                <textarea id="paragraph" name="paragraph" class="mb-4"></textarea><br>
            </div>


            <div class=" border border-4 border-danger rounded-4 p-4 mb-3 ">
                <label for="bad_word" class="mb-2">Parola da censurare:</label><br>
                <input type="text" id="bad_word" name="bad_word" class="mb-4"><br>
            </div>

            <input type="submit" value="Invia" class="btn btn-danger ">
        </form>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>