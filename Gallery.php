<?php require_once('db_helper.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="static/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <title>Gallery</title>
</head>
<body>
<div class="buttons">
    <a href="index.php">Главная</a>
    <a href="mailto:minerec5@gmail.com">Почта</a>
    <a href="https://t.me/danya_maloy">Телеграм</a>
    <a href="about.php">Обо мнеeeeeeeeeeeeeeeeeeeeeeeeee</a>
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
    <div class="block white">
        <span class="title">
                Опыт
        </span>
        <span class="subtitle">Курс 1</span>
        <span class="desc">
                На первом курсе вместе с моими одногруппниками мы разработали сайт, который заменял ЭИОС. Наше отличие от оригинала заключалось в простоте использования, устранении некоторых недостатков ЭИОСа и добавлении некоторых новых функций.
            </span>
        <span class="subtitle">Курс 2</span>
        <span class="desc">
                На втором курсе было разработано Android приложение для работы с Яндекс.Станцией. Оно позволяло использовать ее в локальной сети и управлять всеми функциями через телефон.
            </span>
        <span class="subtitle">Курс 3</span>
        <span class="desc">
                Пока ничего, но скоро сдавать курсовую. Дада
            </span>
    </div>
<div class="block">
        <span class="title">Галерея</span>
        <section class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="1.PNG">
                    </li>
                    <li class="splide__slide">
                        <img src="4.jpg">
                    </li>
                    <li class="splide__slide">
                        <img src="5.jpg">
                    </li>
                </ul>
            </div>
        </section>
    </div>

	<script>
        new Splide( '.splide', {
            perPage: 1,
            type: "loop",
        } ).mount();
    </script>
</div>
<script>
    const show_burger = () => {
        document.getElementsByClassName("burger-menu")[0].classList.toggle("active");
    }

</script>
</body>
</html>
