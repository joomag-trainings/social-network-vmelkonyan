<?php
/**
 * Created by PhpStorm.
 * UserModel: moof
 * Date: 7/19/17
 * Time: 3:19 AM
 */

namespace controller;


class ErrorController
{
    public function actionnotFound()
    {
        require('./view/error/404.php');
    }
}