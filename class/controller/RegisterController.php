<?php

namespace controller;

class RegisterController
{
    public function actionValidate()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['pseudonym'];
            $password = $_POST['password'];
            $_SESSION['user'] = $username;
            header('location: http://localhost/social-network/index.php?page=Register&action=Timeline');
            die;
        } else {
            header('location: ../../register.php');
            die;
        }
    }

    public function actionTimeline()
    {
        require_once('./view/user/timeline.php');
    }
}