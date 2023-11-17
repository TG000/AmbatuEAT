<?php
    class AdminController
    {
        public function home($path) {
            require_once $path . '/app/Views/admincp/control.php';
        }
    }
?>