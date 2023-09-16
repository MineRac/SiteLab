<?php require_once('db_helper.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://45.152.114.177/php/static/style.css">
    <title>Site</title>
</head>
<body>  
<div class="buttons">
    <a href="http://45.152.114.177/php/Gallery.php">Галерея</a>
    <a href="https://t.me/danya_maloy">Телеграм</a>
    <a href="mailto:minerec5@gmail.com">Почта</a>
    <a href="http://45.152.114.177/php/about.php">Обо мне</a>
    <a href="http://45.152.114.177/php/login.php">
        <?php
        $dbhelper = new DBHelper();
        if (isset($_COOKIE['token'])) {
            echo("Добро пожаловать, ".$dbhelper->getUserNameByToken($_COOKIE['token']));
        } else {
            echo("Войти");
        }
        ?>
    </a>
    
</div>
<div class="container">
    <div class="burger-menu">
        <div class="block">
            <span class="title">Ссылки</span>
            <a href="http://45.152.114.177/php/login.php">
                <?php
                $dbhelper = new DBHelper();
                if (isset($_COOKIE['token'])) {
                    echo("Привет, ".$dbhelper->getUserNameByToken($_COOKIE['token']));
                } else {
                    echo("Войти");
                }
                ?>
            </a>
            <a href="https://t.me/danya_maloy">Телеграм</a>
            <a href="mailto:minerec5@gmail.com">Почта</a>
        </div>
        <div class="block">
            <span class="title">Страницы</span>
            <a style="width: fit-content" href="http://45.152.114.177/php/index.php">Главная</a>
            <a style="width: fit-content" href="http://45.152.114.177/php/page2.php">Страница 2</a>
            <a style="width: fit-content" href="http://45.152.114.177/php/page3.php">Страница 3</a>
            <a style="width: fit-content" href="http://45.152.114.177/php/page4.php">Страница 4</a>
            <a style="width: fit-content" href="http://45.152.114.177/php/page5.php">Страница 5</a>
        </div>
    </div>
    <div class="burger-icon" onclick="show_burger()">
        <img src="http://45.152.114.177/php/static/burger.svg" >
    </div>
    <div class="block">
        <div class="avatar">
            <img src="https://cdn4.telegram-cdn.org/file/Bl7aLbU0cEJsu6bbCdGWXMLK00K_KcNmHg43XXjZJFrfS5K2SWHvfNU8-8UigP7uROnpR8O_FOoYgr3y_rvHkCEDVov1iqREdHguZyG4dKlte7E0JeMHHhnL3DbsxUtaPo1hLia6ficVdhehXQND1vHnfhcHOUHj8BoUQ0tcqK6y_Q_PsIZEl9mJEY53P6aczJ2RomoYKBnrIIwjIxd0_fVuxrwC92Aw0jaGvEbwWiUXU3rey4O3pHxASnf5l2PmBK5LSYcyS_BwSpzL1ddsro1OHiKHdJzH7u6a3BzyfclAutRpk_H1pa1gddZzRrvFO4WZQz5qJ183Dzql9tzh5g.jpg">
        </div>
        <span class="title">
                Добро пожаловать на мой сайт! Меня зовут Даниил. На данном сайте вы можете ознакомится с моими работами.
            </span>
        <span class="desc">
                
            </span>
        <span class="desc">
                В галерее представлены работы, которые были представлены за время обучения в университете.
            </span>
    </div>
</div>
<script>
    const show_burger = () => {
        document.getElementsByClassName("burger-menu")[0].classList.toggle("active");
    }

</script>
</body>
</html>
