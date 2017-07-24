<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/21/17
 * Time: 5:29 AM
 */

namespace controller;

use model\UserModel;

class EditController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function actionEdit()
    {
        require('class/RegistrationValidator.php');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $validator = new \RegistrationValidator();
            // initialized non-hashed password to verify with the current password
            $user = new UserModel(null, $validator->validateFirstName(), $validator->validateLastName(),
                $validator->validatePseudonym(), $validator->validateEmail(), $_POST['password']);
            $result = UserModel::updateUser($user, $validator->validateNewPassword());
            if ($result) {
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

                require('view/user/edit.php');
                die;
            }
        } else {
            require('view/intro/edit.php');
            die;
        }
    }
}