<?php
    function account_valid($connect, $username, $password) {
        $query = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
        return mysqli_query($connect, $query);
    }
?>