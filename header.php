<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <title>project</title>
</head>
<body>
<div class="main">
<header>
    <div id= "logo">
        <img src="https://aptekaplus.kz/local/templates/aptekaplus_template/images/header/logo.png" alt="">
    </div>

    <nav>
        <?php $url = $_SERVER["REQUEST_URI"];?>
            <ul id=navigation>
                <li id=navigation><a href="/home.php" class=navigation <?php if ($url == "/home.php") {echo 'class="active"';}?>>Главная</a></li>
                <li id=navigation><a href="/contacts.php" class=navigation <?php if ($url == "/contacts.php") {echo 'class="active"';}?>>Контакты</a></li>
                <li id=navigation><a href="/ad.php" class=navigation <?php if ($url == "/ad.php") {echo 'class="active"';}?>>Реклама</a></li>
            </ul>
    </nav>  
</header>




