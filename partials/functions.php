<?php
    session_start();
    if(isset($_GET['length']) && $_GET['length'] >= 3 && $_GET['length'] <= 20){
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

    // if((isset($_GET['length'])) && (isset($_GET['letters'])) && (isset($_GET['numbers'])) && (isset($_GET['specials']))){
        
    //     function generateRandomPassword($length, $letters, $numbers, $specials){
    //         //dichiaro una stringa di caratteri
    //         $alphabet = '';
    //         if($letters == true){
    //             $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //         }
    //         if($numbers == true){
    //             $alphabet = '1234567890';
    //         }
    //         if($specials == true){
    //             $alphabet = '!$%&?+-=><*';
    //         }
    //         // var_dump(strlen($alphabet));
    //         $password = '';
    
    //         //ciclo per un tot di iterazioni 
    //         for($i = 0; $i < $length; $i++){
    //             //genero un numero random fino alla lunghezza del mio array
    //             $n = rand(0, strlen($alphabet)-1);
    //             //associo l'inidice dell'array ad un array di singoli caratteri
    //             $singleType = $alphabet[$n];
    //             // var_dump($singleType);
    //             $password = $password.$singleType;
    //         };
    //         return $password;
    //     }
    //     $generate = generateRandomPassword($_GET['length'], $_GET['letters'], $_GET['numbers'], $_GET['specials']);
    //     $_SESSION['finalpassword'] = $generate;
    // }
?>