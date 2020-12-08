<?php
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    
    define('MYSQL_USER', "");
    define('MYSQL_USERPW', "");
    define('MYSQL_DB', "");
    define('MYSQL_SERVER', "127.0.0.1:3306");
    $GLOBALS['db'] = mysqli_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_USERPW, MYSQL_DB);

    date_default_timezone_set('Europe/Berlin');
    define('DATE_FORMAT', "d.m.y H:i");

?>