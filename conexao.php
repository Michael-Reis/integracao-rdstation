<?php
    
    $host = "";
    $user = "";
    $password = "";
    $db = "";  
    

    $link = mysqli_connect($host, $user, $password, $db);
    mysqli_set_charset($link,'utf8');
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }  


?>