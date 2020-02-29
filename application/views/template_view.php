<!DOCTYPE html>
<html lang="ru">
<head>
<!--    <meta charset="utf-8">-->
<!--    <title>Главная</title>-->

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>ОЛОЛОША TEAM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
</head>
<body>

<!--Шапка-------------------------------------------------------------------------------------------------------------->
<div id="block-body">
        <div class="logo">
            <!--суда можьно вставить лого-->
        </div>
        <div class="top-menu">
            <ul>
                <li class="clickMenu"><a href="/">Главная</a></li>
                <li><a href="/services">Услуги</a></li>
                <li><a href="/portfolio">Портфолио</a></li>
                <li><a href="/news">новости</a></li>
                <li class="last"><a href="/contacts">Контакты</a></li>
            </ul>
        </div>
        <div class="block-top-auth">
            <p><a href="/authorization">Вход</a></p>
            <p><a href="/registration">Регистрация</a></p>
        </div>
    <div id="block-content"></div>
</div>
<!--------------------------------------------------------------------------------------------------------------------->

<?php include 'application/views/'.$content_view; ?>


<!--<div id="menu">-->
<!--    <ul>-->
<!--        <li class="first active"><a href="/">Главная</a></li>-->
<!--        <li><a href="/services">Услуги</a></li>-->
<!--        <li><a href="/portfolio">Портфолио</a></li>-->
<!--        <li><a href="/authorization">авторизауия</a></li>-->
<!--        <li><a href="/registration">регистрация</a></li>-->
<!--        <li><a href="/news">новости</a></li>-->
<!--        <li class="last"><a href="/contacts">Контакты</a></li>-->
<!--    </ul>-->
<!--    <br class="clearfix" />-->
<!--</div>-->
</body>
</html>
