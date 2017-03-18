<?php

include "class.query.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $DOB = $_POST['DOB'];
    $signup = time();
    $table = "users";
    
    $data = array(
      "username" => $username, 
      "password" => $password,  
      "DOB" => $DOB,  
      "signup" => $signup  
    );

    if($db_connection->insert($table, $data)){
        die("Success");
    }else{
        die("Error");
    }

