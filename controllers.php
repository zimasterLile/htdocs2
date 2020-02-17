<?php

require 'models.php';
require 'views.php';

use Views\Pagination;
use Models\Logic\Authorization as Auth;
use Models\Logic\Registration as Reg;

//      Коды

// Роутинг
//Code 1 = Пользователь - админ
//Code 2 = Обычный пользователь
//Code 3 = Перенаправление на авторизацию

// Авторизация
//Code 10 = Пользователя не существует
//Code 11 = Неправильный пароль

// Регистрация
//Code 12 = Такой пользователь уже существует
//Code 13 = Логин с нижнего регистра
//Code 14 = Кол-во символов в логине меньше 4-х
//Code 15 = Пароль с нижнего регистра
//Code 16 = Кол-во символов в пароле меньше 6-ти
//Code 17 = Имя не на русском языке
//Code 18 = Фамилия не на русском языке
//Code 19 = В пароле не содержится чисел
//Code 20 = Неверный email

class Router
{
    static public function routProcessing($code)
    {
        switch ($code) {
            case 1:
               header('Location: admin.php');
               break;
            case 2:
                header('Location: profile.php');
                break;
            case 3:
                header('Location: index.php?authorization=processing');
                break;
        }
    }
}


if (!empty($_POST['auth']))
    if ($_POST['auth'] == 'Войти') {
        $obj = new Auth($_POST['login'], $_POST['password']);
        $res = $obj->validate();
        if ($res < 10) return Router::routProcessing($res);
        if ($res < 30) return Pagination::definition($res);
    }
if (!empty($_POST['Registration']))
    if ($_POST['Registration'] == 'Войти') {
        $obj = new Reg(
            $_POST['name'],
            $_POST['lastname'],
            $_POST['email'],
            $_POST['login'],
            $_POST['password']
        );
        $res = $obj->processing();
        if (is_int($res) == true) return Pagination::definition($res);
        return Router::routProcessing(3);
    }

Pagination::definition();
