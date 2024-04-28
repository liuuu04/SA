<?php 
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $db_name = "sa";  
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    return $conn;
    ?>