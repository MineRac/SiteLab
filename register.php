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
<?php
if (isset($_COOKIE['token'])) {
    setcookie("token", "", time()-3600);
    Header("Location: http://45.152.114.177/php/index.php");
}

if (isset($_POST['username'])) {
    $dbhelper = new DBHelper();
    if ($_POST['type'] == "login") {
        $token = $dbhelper->do_login($_POST['username'], $_POST['password']);
    }
    else {
        if (strlen($_POST['password']) < 8) {
            $pass_len = 1;
        }
        else {
            $token = $dbhelper->do_registration($_POST['name'], $_POST['username'], $_POST['password']);
        }
    }
    if ($token == NULL && $pass_len == 0) {
        $errors = 1;
    } else if ($token == NULL && $pass_len == 1) {
        $pass_len = 1;
    }
    else
    {
        setcookie("token", $token);
        Header("Location: http://45.152.114.177/php/index.php");
    }

}
?>
<div class="block">
        <span class="title">Регистрация</span>
    <?php
    if(isset($errors)) {
        ?>
        <span class="desc" style="color: lightcoral">Имя пользователя и\или пароль не верны или данный логин уже занят</span>
        <?php
    } ?>

    <?php
    if(isset($pass_len)) {
        ?>
        <span class="desc" style="color: lightcoral">Cлишком короткий пароль</span>
        <?php
    } ?>
        <form action="http://45.152.114.177/php/register.php" method="post">
            <input type="hidden" name="type" value="registration">
            <label>
                <input name="username" type="text" placeholder="Ваш логин">
            </label>
            <label>
                <input name="name" type="text" placeholder="Ваше имя">
            </label>
            <label>
                <input name="password" minlength="8" type="password" placeholder="Ваш пароль">
            </label>
            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</div>
</body>
</html>
