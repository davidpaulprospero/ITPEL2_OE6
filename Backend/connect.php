<?php
    require_once('header.php');

// Define named constants
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_USER', 'root');
    DEFINE('DB_PASSWORD', '');

    DEFINE('DB_NAME', 'itpel2_db');

// Establish connection - String connection
    $con = @mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME ) or die('Could not connect to database...');
?>