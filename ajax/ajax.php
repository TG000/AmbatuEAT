<?php
    session_start();

    if($_POST['action'] == 'sign_out') {
        echo '<script>console.log("Log out!")</script>';
        $_SESSION['isLoggedIn'] = false;
    }
?>