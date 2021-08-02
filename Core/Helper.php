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
function insert($name, $phone , $email){
   

    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRIPPED);
    $phone = filter_var( $_POST['phone'], FILTER_SANITIZE_STRIPPED);
    $email = filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL);
    
    $conn = connect()->prepare("Insert INTO users (name, email, phone) VALUE (?,?,?)");
        
    $conn->bindValue(1, $name);
    $conn->bindValue(2, $phone);
    $conn->bindValue(3, $email);
    $conn->execute();

    if(!$conn->rowCount()){
        echo "
        <div class='alert alert-danger'>
            Não foi possível cadastrar!
        </div>
    ";

    }

}




function search($email){


    $conn = connect()->prepare("SELECT email FROM users WHERE email = :e");
    $conn->bindParam(':e', $email);
    $conn->execute();

    $data = $conn->fetch(PDO::FETCH_ASSOC);
    var_dump( $data);
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