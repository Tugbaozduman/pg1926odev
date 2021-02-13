<?php 

    session_start();


    define('SITEURL', 'http://localhost/yemekyemek/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'yemekyemek');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die($mysqli->error);
    $db_select = mysqli_select_db($conn, DB_NAME) or die($mysqli->error);


?>