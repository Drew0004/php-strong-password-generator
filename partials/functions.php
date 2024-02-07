<?php
    session_start();
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
        $_SESSION['finalpassword'] = generateRandomPassword($_GET['length']);
    }
?>