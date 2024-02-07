<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Result</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body class="bg-dark">
        <div class="container">
            <h1 class="text-center text-white my-4">
                Risultato password
            </h1>

            <h3 class="text-center text-white fw-bold my-5">
                La tua password è: 
                <?php 
                    echo $_SESSION['finalpassword']
                ?>
            </h3>
            <div class="text-center">
                <button class="btn btn-success my-3 rounded-5">
                    <a class="text-white text-decoration-none" href="./logout.php">Torna alla home</a>
                </button>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>