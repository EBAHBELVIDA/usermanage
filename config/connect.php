<?php
    session_start(); // charger les sessions  
    $erreur_message = '';
    $success_message = '';
    $code = '';
    $username  = 'root'; // root 
    $userpassword = ''; // vide


    function generate_token($param){

        $token = '';
        $characters = [
            'a',
            'b',
            'c',
            'd',
            'e',
            'f',
            'g',
            'h',
            'i',
            'j',
            'k',
            'l',
            'm',
            'n',
            'o',
            'p',
            'q',
            's',
            't',
            'u',
            'v',
            'w',
            'x',
            'y',
            'z',
            0,
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G',
            'H',
            'I',
            'J',
            'K',
            'L',
            'M',
            'N',
            'O',
            'P',
            'Q',
            'S',
            'T',
            'U',
            'V',
            'W',
            'X',
            'Y',
            'Z',
            '!',
            '@',
            '#',
            '$',
            '%',
            '^',
            '(',
            '*',
            '_',
            '+',
            ')',
          ];

        for($i = 0; $i<$param; $i++){
            $token.= $characters[mt_rand(1, count($characters))]; 
        }

        return $token; 
    }

    try{
        $db = new PDO('mysql:host=localhost;dbname=ecole;charset=utf8',$username,$userpassword);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }catch(PDOException $e){

        $erreur_message = $e->getMessage();
        $code = $e->getCode();

        /*
            MySQL Errors 1000 - 1049
            MySQL Errors 1050 - 1099
            MySQL Errors 1100 - 1149
            MySQL Errors 1150 - 1199
            MySQL Errors 1200 - 1249
            MySQL Errors 1250 - 1299
            MySQL Errors 1300 - 1349
            MySQL Errors 1350 - 1399
            MySQL Errors 1400 - 1449
            MySQL Errors 1450 - 1499
            MySQL Errors 1500 - 1549
            MySQL Errors 1550 - 1599
            MySQL Errors 1600 - 1649
            MySQL Errors 1650 - 1699
            MySQL Errors 1700 - 1749 
            https://fromdual.com/mysql-error-codes-and-messages
        */


    }
