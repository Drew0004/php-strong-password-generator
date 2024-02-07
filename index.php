<?php

    if(isset($_GET['length'])){
        function generateRandomPassword($length){
            //dichiaro una stringa di caratteri
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!$%&?+-=><*';
            // var_dump(strlen($alphabet));
            $password = '';
    
            //ciclo per un tot di iterazioni 
            for($i = 0; $i < $length; $i++){
                //genero un numero random fino alla lunghezza del mio array
                $n = rand(0, strlen($alphabet)-1);
                //associo l'inidice dell'array ad un array di singoli caratteri
                $singleType = $alphabet[$n];
                // var_dump($singleType);
                $password = $password.$singleType;
            };
            return $password;
        }
    }
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
                            <input type="number" class="form-control" id="length" name="length">
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <button class="btn btn-primary">
                            Genera
                        </button>
                    </div>
                    <div class="col-12 text-center my-3">
                        
                        <?php
                            if(isset($_GET['length'])){
                                echo '<h2>La tua password è: '.generateRandomPassword($_GET['length']).'</h2>'; 
                            } 
                        ?>
                       
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>