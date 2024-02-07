<?php
    require __DIR__ .'/partials/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strong Password Generator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            
            <h1 class="text-center my-4">
                Password Generator
            </h1>
            
            
            <div class="row">
                <form action="./index.php" method="get">
                    <div class="col-6 mx-auto">
                        <div class="mb-3">
                            <label for="length" class="form-label">Quanti caratteri deve essere lunga la tua password</label>
                            <input type="number" class="form-control" id="length" name="length" required min="3" max="20" placeholder="Inserisci un numero da 3 a 20...">
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <button class="btn btn-primary">
                            Genera
                        </button>
                    </div>
                    <?php 
                        if(isset($_GET['length'])){
                            header('Location: ./partials/result.php');
                        }
                    ?>    
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>