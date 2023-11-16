<?php
    $config = parse_ini_file('../dbambatueat.mypressonline.com/includes/db.ini');
    $connect = new mysqli($config['host'], $config['username'], $config['password'], $config['db'], $config['port']);
    $login = false;
    $logintype = 0;
    $admin_name = "";

    // Check connection
    if ($connect -> connect_errno) {
        function debug_to_console($data) {
            $output = $data;
            if (is_array($output))
                $output = implode(',', $output);
        
            echo "<script>console.log($output);</script>";
        }
        debug_to_console("Failed to connect to MySQL: " . $connect->connect_error);
    }

    if (isset($_POST['signin-btn'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) === 1) {
            $login = true;
            $row = mysqli_fetch_array($result);
            $logintype = $row['role'] == 'admin' ? 1 : 0;
            $admin_name = $row['name'];
        }
    }
?>