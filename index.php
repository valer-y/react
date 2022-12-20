<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<header>
    <div class="container">
        <a class="header__burger-menu">
            <div></div>
            <div></div>
            <div></div>
        </a>
        <a class="header__logo" href="/">
            <img src="assets/img/header/Logo.svg" alt="Site logo">
        </a>
        <div class="header__search-form">
            <form action="#">
                <input type="text" placeholder="Search" name="search">
                <button type="submit">
                    <img src="assets/img/header/search-form/lens.svg" alt="">
                </button>
            </form>
            <div class="header__search-form_mobile"></div>
        </div>
        <div class="header__user-block">
            <a href="#" class="header__user-block__camera">
                <img src="assets/img/header/user-block/user-camera.svg" alt="user-video icon">
            </a>
            <a href="#" class="header__user-block__options">
                <img src="assets/img/header/user-block/user-options.svg" alt="user-options icon">
            </a>
            <a href="#" class="header__user-block__notifications">
                <div class="notification__counter">
                    3
                </div>
                <img src="assets/img/header/user-block/user-notifications.svg" alt="user-notifications icon">
            </a>
            <a href="#" class="header__user-block__user-profile">
                <img src="assets/img/header/user-block/Userpic.png" alt="user icon">
            </a>
        </div>
    </div>
</header>


<!--    <h1>Hello Cloudreach!</h1>-->
<!--    <h4>Attempting MySQL connection from php...</h4>-->
<!--    --><?php
//    $host = 'mysql';
//    $user = 'root';
//    $pass = 'rootpassword';
//    $conn = new mysqli($host, $user, $pass);
//
//    if ($conn->connect_error) {
//        die("Connection failed: " . $conn->connect_error);
//    } else {
//        echo "Connected to MySQL successfully!";
//    }
//
//    ?>
</body>
</html>



