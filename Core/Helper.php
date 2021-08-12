<?php

require('Connect.php');



/**
 * Method insert
 *
 * @param $name $name 
 * @param $phone $phone
 * @param $email $email
 *
 * @return void
 */
function insertValue($name, $phone , $email){
   

    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRIPPED);
    $phone = filter_var( $_POST['phone'], FILTER_SANITIZE_STRIPPED);
    $email = filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL);
    
    if(!search($email)){
        $conn = connect()->prepare("Insert INTO users (name,phone, email) VALUE (?,?,?)");
            
        $conn->bindValue(1, $name);
        $conn->bindValue(2, $phone);
        $conn->bindValue(3, $email);
        $conn->execute();

        $msg['mensagem'] = "<div class='alert alert-danger'>
        Cadastro realizado com sucesso!
    </div>
";

    }else{
        $msg['mensagem'] = "<div class='alert alert-danger'>
        Cadastro realizado com sucesso!
    </div>
";

    }

}

function search($email){

    $data = new \stdClass();

    $email = $email;
    $conn = connect()->prepare('SELECT email FROM users WHERE email = :e');
    $conn->bindParam(':e', $email); 
    $conn->execute(); 
    $data = $conn->fetch();
    return $data;
}


/**
 * Method show
 *
 * @return void
 */
function show(){

    $data = new \stdClass();
    $conn = connect()->query('SELECT * FROM users');
    $conn->execute();

    $data = $conn->fetchAll();

    return $data;


}




?>