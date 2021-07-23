<?php


try{
    $pdo = new PDO("mysql:host=localhost;dbname=formulario_teste",
        "root",
        "",
        [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_CASE => PDO::CASE_NATURAL
        ]);
    $pdo->setAttribute(   PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Banco conectado com sucesso";
}catch (Exception $e){
    echo "Erro ao conectar";
}


if(isset($_POST['name']) && !empty($_POST['name'])){
    var_dump($_POST);
}

$name = filter_var($_POST['name'],FILTER_SANITIZE_STRIPPED);
$phone = filter_var( $_POST['phone'], FILTER_SANITIZE_STRIPPED);
$email = filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL);


$conn = $pdo->prepare("Insert INTO users (name, email, phone) VALUE (?,?,?)");

$conn->bindValue(1, $name);
$conn->bindValue(2, $phone);
$conn->bindValue(3, $email);
$conn->execute();


