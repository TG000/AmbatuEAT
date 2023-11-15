<?php
    $config = parse_ini_file('../dbambatueat.mypressonline.com/includes/db.ini');
    $mysqli = new mysqli($config['host'], $config['username'], $config['password'], $config['db'], $config['port']);

    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
?>