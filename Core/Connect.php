<?php

function connect(){
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=formulario_teste",
            "root",
            "",
            [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //Configura para aceitar carateres especiais
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Exibe erros de exception
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // converter os dados do PDO como object array
                PDO::ATTR_CASE => PDO::CASE_NATURAL // traz todos nomes de colunas conforme foi criado
            ]);
        $pdo->setAttribute(   PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }catch (Exception $e){
        echo "Erro ao conectar";
    }

    return $pdo;
}
