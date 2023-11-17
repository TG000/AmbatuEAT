<?php
    class UserController 
    {
        public function signin($path) {
            require_once $path . '/app/Views/user/signin.php';
        }

        public function signup($path) {
            require_once $path . '/app/Views/user/signup.php';
        }
    }
?>