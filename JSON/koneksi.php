<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'dbbarang');

    $db_connect = mysqli_connect ( HOST,USER,PASS,DB )  or die ('unable connect');

    header('Content-Type: application/json');
?>