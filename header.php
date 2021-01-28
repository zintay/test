
<title>contacts</title>
<link rel="stylesheet" src="/css/style.css">
<header>
<div id= "logo">
<img src="https://aptekaplus.kz/local/templates/aptekaplus_template/images/header/logo.png" alt="">
</div>

<nav>

<?php $url = $_SERVER["REQUEST_URI"];?>
<ul>
<li><a href="/home.php" <?php if ($url == "/home.php") {echo 'class="active"';}?>>Главная</a></li>
<li><a href="/contacts.php" <?php if ($url == "/contacts.php") {echo 'class="active"';}?>>Контакты</a></li>
<li><a href="/ad.php" <?php if ($url == "/ad.php") {echo 'class="active"';}?>>Реклама</a></li>
</ul>
</nav>  
</header>

