<?php
/**
 * Created by PhpStorm.
 * UserModel: moof
 * Date: 7/19/17
 * Time: 4:37 AM
 */

namespace controller;


use model\UserModel;

class AuthenticationController
{
    public function actionRedirect()
    {
        require('view/intro/login.php');
    }

    public function actionLogout()
    {
        unset($_SESSION['username']);
        session_destroy();
        require('./view/intro/login.php');
    }

    public function actionLogin()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $validator = new \RegistrationValidator();
            $user = new UserModel(null, null, null, $validator->validatePseudonym(), null, $_POST['password']);
            $user = UserModel::checkUser($user);
            if (!$user) {
                require('./view/intro/login.php');
            } else {
                $_SESSION['user'] = [
                    'id' => $user->getId(),
                    'firstName' => $user->getFirstName(),
                    'lastName' => $user->getLastName(),
                    'pseudonym' => $user->getPseudonym(),
                    'email' => $user->getEmail()
                ];
                require('./view/user/profile.php');
            }
        } else {
            require('./view/intro/login.php');
        }
    }
}