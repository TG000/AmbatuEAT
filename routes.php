<?php
    // Include necessary files
    require_once __DIR__ . '/app/Controllers/HomeController.php';
    require_once __DIR__ . '/app/Controllers/UserController.php';
    require_once __DIR__ . '/config/database.php';

    // Route incoming requests
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'home':
                $controller = new HomeController();
                $controller->user(__DIR__);
                break;
            case 'signin':
                $controller = new UserController();
                $controller->signin(__DIR__);
                break;
            case 'signup':
                $controller = new UserController();
                $controller->signup(__DIR__);
                break;
            default:
                echo "Page not found";
        }
    }
    else {
        if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true) {
            $controller = new HomeController();
            $controller->user(__DIR__);
            return;
        }
        $controller = new HomeController();
        $controller->guest(__DIR__);
    }
?>