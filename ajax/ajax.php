<?php
    if($_POST['action'] == 'sign_out') {
        $_SESSION['isLoggedIn'] = false;
    }
?>