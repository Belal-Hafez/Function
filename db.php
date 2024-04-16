<?php 

    $db_name = "Calculus_course";
    $host = "localhost";
    $username = "belalo";
    $password = "Bb123456";

    $connection = new mysqli($host, $username, $password, $db_name);

    if ($connection -> connect_error) die(); 