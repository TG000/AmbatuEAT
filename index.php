<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./source/css/responsive.css">
    <link rel="stylesheet" href="./source/css/styles.css">
    <link rel='icon' href="./other/img/logo.ico" type='image/x-icon' sizes="16x16"/>
    <title>AmbatuEAT</title>
</head>
<body>
    <?php
        if (isset($_GET['control'])) {
            $tam = $_GET['control'];
        }
        else {
            $tam = '';
        }

        if ($tam == 'about') {

        }

        include("source/pages/normal/back_top.php");
        include("source/pages/normal/navbar.php");
        include("source/pages/normal/home.php");
        include("source/pages/normal/footer.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./source/js/jquery.touchSwipe.min.js"></script>
    <script src="./source/js/carousel.js"></script>
    <script src="./source/js/animated.js"></script>
    <script src="./source/js/index.js"></script>
</body>
</html>