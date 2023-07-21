<?php

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Access-Control-Max-Age: 3600');


    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'authentication_db';
    
    // Create a database connection
    $conn = new mysqli($host, $username, $password, $dbname);
    
?>