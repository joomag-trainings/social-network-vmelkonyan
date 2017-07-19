<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/19/17
 * Time: 4:37 AM
 */

namespace controller;


class AuthenticationController
{
    public function actionRedirect()
    {
        require('/var/www/html/social-network/view/intro/login.php');
    }

    public function actionLogout()
    {
        unset($_SESSION['user']);
        unset($_SESSION['message']);
        session_destroy();
        require('./view/intro/login.php');
    }

    public function actionLogin()
    {

    }
}