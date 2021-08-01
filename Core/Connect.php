<?php

function connect(){
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=formulario_teste",
            "root",
            "",
            [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_CASE => PDO::CASE_NATURAL
            ]);
        $pdo->setAttribute(   PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }catch (Exception $e){
        echo "Erro ao conectar";
    }

    return $pdo;
}
