<?php
/**
 * Created by PhpStorm.
 * UserModel: moof
 * Date: 7/19/17
 * Time: 2:48 AM
 */

namespace controller;


class IntroController
{

    public function actionLanding()
    {
        require('./view/intro/landingPage.php');
    }

    public function actionRegister()
    {
        require('./view/intro/register.php');
    }

    public function actionLogin()
    {
        require('.view/intro/login.php');
    }
}