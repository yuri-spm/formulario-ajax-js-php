<?php

require ('Core/Helper.php');

    if(isset($_POST['name']) && !empty($_POST['name'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        
        
        if(!search($email)){
            insertValue($name, $phone, $email);
        }
        
    }

  
    





