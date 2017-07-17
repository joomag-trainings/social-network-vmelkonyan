<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/17/17
 * Time: 3:06 AM
 */

namespace php\inc;

/**
 * Class RegistrationValidator
 * @package inc
 */
class RegistrationValidator implements DataValidator
{

    public function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function validateFirstName($firstName)
    {
        return empty($_POST['firstName']) ? die(header('location: register.html')) : $firstName = validate($_POST['firstName']);
    }

    public function validateLastName($lastName)
    {
        return empty($_POST['lastName']) ? die(header('location: register.html')) : $lastName = validate($_POST['lastName']);
    }

    public function validatePseudonym($pseudonym)
    {
        return empty($_POST['pseudonym']) ? die(header('location: register.html')) : $pseudonym = validate($_POST['pseudonym']);
    }

    public function validateEmail($email)
    {
        return empty($_POST['email']) ? die(header('location: register.html')) : $email = filter_var(validate($_POST['email']),
            FILTER_VALIDATE_EMAIL);
    }

    public function validatePassword($password)
    {
        return empty($_POST['password']) ? die(header('location: register.html')) : $password = password_hash(validate($_POST['password']),
            PASSWORD_BCRYPT);
    }

}