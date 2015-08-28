<?php
//connect the database using PDO
try{
    
    define('DB_SERVER', "localhost");
    define('DB_USER', "root");
    define('DB_PASSWORD', "");
    define('DB_DATABASE', "project1");
    define('DB_DRIVER', "mysql");

    $DBH = new PDO(DB_DRIVER . ":dbname=" . DB_DATABASE . ";host=" . DB_SERVER, DB_USER, DB_PASSWORD);
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (EPDOxception $e) {
        echo $e->getMessage();
}

