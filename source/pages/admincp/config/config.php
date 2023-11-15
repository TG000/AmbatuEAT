<?php
    // $config = parse_ini_file('/var/www/website.com/db.ini');
    $host = 'fdb1031.your-hosting.net';
    $username = '4401811_ambatueat';
    $password = 'Ambasing1';
    $db_name = '4401811_ambatueat';
    $port = 3306;

    $mysqli = new mysqli($host, $username, $password, $db_name, $port);

    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
?>