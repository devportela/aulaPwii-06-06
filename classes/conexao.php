<?php

function conectarBanco(){
    $= = "mysql:dbname=escola;host=localhost";
    $user = "root";
    $pass = "";

    try {
        $pdo =  new PDO($way,$user,$pass);
    } catch (\Throwable $th) {
        echo "erro ao conectar ao banco de dados".$th;
    }


    
}




