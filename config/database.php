<?php
    session_start();

    $config = parse_ini_file('../data/includes/db.ini');
    $connect = new mysqli($config['host'], $config['username'], $config['password'], $config['db']);

    // Check connection
    if ($connect -> connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
    else {
        $_SESSION['db_connect'] = $connect;
    }
?>