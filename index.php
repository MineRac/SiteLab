<?php require_once('db_helper.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="static/style.css">
    <title>Site</title>
</head>
<body>  
<div class="buttons">
    <a href="Gallery.php">Галерея</a>
    <a href="https://t.me/danya_maloy">Телеграм</a>
    <a href="mailto:minerec5@gmail.com">Почта</a>
    <a href="about.php">Обо мне</a>
    <a href="login.php">
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
            <a href="login.php">
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
            <a style="width: fit-content" href="index.php">Главная</a>
            <a style="width: fit-content" href="page2.php">Страница 2</a>
            <a style="width: fit-content" href="page3.php">Страница 3</a>
            <a style="width: fit-content" href="page4.php">Страница 4</a>
            <a style="width: fit-content" href="page5.php">Страница 5</a>
        </div>
    </div>
    <div class="burger-icon" onclick="show_burger()">
        <img src="static/burger.svg" >
    </div>
    <div class="block">
        <div class="avatar">
            <img src="https://cdn4.cdn-telegram.org/file/VvwD6-hFE7vGTALl831gWAp7rexgDKzJUHu24SCe27jmLTKPY3Xnc1RJ76kfpZu2Bj1yxhWVrG1Vk_7h219C_gGIgTyHOGMkOru-9pOIlqOWNYTn2ATAtb9_wQRVVsiH1UDaSRBy3uvz8KiuQUiSLNDJkOKnqAlytR69PROcY5OWqv-jho93HWJY1vI-5lYXmRI_6CWd1ZFvx81IcQwtcMx_Y6rCsJ56OpbMt9_pJoSgd9HOYAJ2yIIqBpAWELU0zgkjzfqdaI1eokijGWKB8kEtMbmBa2SQZ74g955TsG44D6AfX1nIcFSoDnJ-v-64eswRjuK5t_t3YjEn0CYvBA.jpg">
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
