<?php

    define('USER', 'root');

    define('PASSWORD', 'password');

    define('HOST', 'localhost');

    define('DATABASE', 'studentportal');

    try {

        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);

    } catch (PDOException $e) {

        exit("Error: " . $e->getMessage());

    }

?>
