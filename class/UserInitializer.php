<?php
require_once('./class/RegistrationValidator.php');
require_once('./class/User.php');

class UserInitializer
{
    private $newUser;

    public function initializeUser($firstName, $lastName, $pseudonym, $email, $password)
    {
        $validator = new RegistrationValidator();
        $newUser = new User();
        $newUser->setFirstName($validator->validateFirstName($firstName));
        $newUser->setLastName($validator->validateLastName($lastName));
        $newUser->setPseudonym($validator->validatePseudonym($pseudonym));
        $newUser->setEmail($validator->validateEmail($email));
        $newUser->setPassword($validator->validatePassword($password));
        return $newUser;
    }
}