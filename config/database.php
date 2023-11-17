<?php
    session_start();

    $config = parse_ini_file('../data/includes/db.ini');
    $connect = new mysqli($config['host'], $config['username'], $config['password'], $config['db']);

    // Check connection
    if ($connect -> connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    if (isset($_POST['signin-btn'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($connect, $query);

        $logged_in_user = mysqli_fetch_array($result);
        echo $logged_in_user['role'];

        if (mysqli_num_rows($result) === 1) {
            

            header('Location: index.php?page=home');
            $_SESSION['isLoggedIn'] = true;
        }
        else {
            
        }
    }
?>