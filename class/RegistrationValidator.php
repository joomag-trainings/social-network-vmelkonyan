<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/17/17
 * Time: 3:06 AM
 */

/**
 * Class RegistrationValidator
 * @package inc
 */
require_once('DataValidator.php');

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
        return empty($_POST['firstName']) ? die(header('location: ../../register.php')) : $firstName = $this->validate($_POST['firstName']);
    }

    public function validateLastName($lastName)
    {
        return empty($_POST['lastName']) ? die(header('location: ../../register.php')) : $lastName = $this->validate($_POST['lastName']);
    }

    public function validatePseudonym($pseudonym)
    {
        return empty($_POST['pseudonym']) ? die(header('location: ../../register.php')) : $pseudonym = $this->validate($_POST['pseudonym']);
    }

    public function validateEmail($email)
    {
        return empty($_POST['email']) ? die(header('location: ../../register.php')) : $email = filter_var($this->validate($_POST['email']),
            FILTER_VALIDATE_EMAIL);
    }

    public function validatePassword($password)
    {
        return empty($_POST['password']) ? die(header('location: ../../register.php')) : $password = password_hash($this->validate($_POST['password']),
            PASSWORD_BCRYPT);
    }

}