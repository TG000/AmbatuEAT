<?php
    require_once("app/Models/Auth.php");

    class AuthController
    {
        public function sign_in() {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $result = account_valid($_SESSION['db_connect'], $username, $password);

            if (mysqli_num_rows($result) === 1) {
                header('Location: index.php');
                $_SESSION['isLoggedIn'] = true;
    
                $logged_in_user = mysqli_fetch_array($result);
                $_SESSION['user'] = $logged_in_user['role'];
                $_SESSION['name'] = $logged_in_user['name'];
                $_SESSION['phone_number'] = $logged_in_user['phone_number'];
            }
            else {
                
            }
        }

        public function sign_out() {
            $_SESSION['isLoggedIn'] = false;
            header('Location: index.php');
        }
    }
?>