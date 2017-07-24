<?php

namespace controller;

use model\UserModel;

class RegisterController
{
    public function actionValidate()
    {
        require('class/RegistrationValidator.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $validator = new \RegistrationValidator();
            $user = new UserModel(null, $validator->validateFirstName(), $validator->validateLastName(),
                $validator->validatePseudonym(), $validator->validateEmail(), $validator->validatePassword());
            $result = UserModel::addUser($user);

            if ($result) {
                //use userId (index)
                $_SESSION['user'] = [
                    'id' => $user->getId(),
                    'firstName' => $user->getFirstName(),
                    'lastName' => $user->getLastName(),
                    'pseudonym' => $user->getPseudonym(),
                    'email' => $user->getEmail(),
                ];
                require('view/user/profile.php');
                die;

            } else {

                require('view/intro/register.php');
                die;
            }
        } else {
            require('view/intro/register.php');
            die;
        }
    }

    public function actionTimeline()
    {
        require_once('./view/user/timeline.php');
    }
}