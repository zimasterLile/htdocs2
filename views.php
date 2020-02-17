<?php

namespace Views;

class Pagination
{

    static public function definition($code = 0)
    {
        if ($code == 10) return include 'templates/enough_user.html';
        if ($code == 11) return include 'templates/incorrect_password.html';
        if ($code == 12) return include 'templates/user-exist';
        if ($code == 13) return include 'templates/login-upper.html';
        if ($code == 14) return include 'templates/login-count.html';
        if ($code == 15) return include "templates/password-upper.html";
        if ($code == 16) return include 'templates/password-count.html';
        if ($code == 17) return include 'templates/rus-error-name';
        if ($code == 18) return include 'templates/rus-error-lastname';
        if ($code == 19) return include 'templates/enough-num-password';
        if ($code == 20) return include 'templates/email-incorrect';
        if (!empty($_GET['authorization'])) return include 'templates/authorization.html';
        if (!empty($_GET['registration'])) return include 'templates/registration.html';
        if (empty($_POST['login']) && empty($_POST['password'])) return include 'templates/main-page.html';
    }
}
