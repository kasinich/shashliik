<?php
    define('DB_HOST','localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD','root');
    define('DB_NAME','users');

    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME); 
    $mysql->set_charset('utf8');
    //////////////////////////////
    


?>