<?php
    class HomeController
    {
        public function guest($path) {
            require_once $path . '/app/Views/home/navbar_guest.php';
            require_once $path . '/app/Views/home/home.php';
            require_once $path . '/app/Views/home/footer.php';
            require_once $path . '/app/Views/home/back_top.php';
        }

        public function user($path) {
            require_once $path . '/app/Views/home/navbar_user.php';
            require_once $path . '/app/Views/home/home.php';
            require_once $path . '/app/Views/home/footer.php';
            require_once $path . '/app/Views/home/back_top.php';
        }
    }
?>