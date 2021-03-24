<?php

    // used to connect to the database
    $host = "localhost";
    $db_name = "collectionaventuriersdb";
    $username = "root";
    $password = "";
    
    try {
        $con = new PDO("mysql:host={$host};dbname={$db_name};charset=utf8", $username, $password);
    }
    
    // show error
    catch(PDOException $exception) {
        echo "Connection error: " . $exception->getMessage();
    }

?>