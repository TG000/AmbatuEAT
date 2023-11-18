<?php
    require_once("app/Controllers/AuthController.php");
    $controller = new AuthController();

    if (isset($_POST['signin-btn'])) {
        $controller->sign_in();
    }
    else if (isset($_POST['signout-btn'])) {
        echo '<script>console.log("sign out")</script>';
        $controller->sign_out();
    }
?>