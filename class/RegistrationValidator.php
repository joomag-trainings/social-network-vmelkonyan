<?php
/**
 * Created by PhpStorm.
 * UserModel: moof
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

    public function validateFirstName()
    {
        return empty($_POST['firstName']) ? die(header('location: http://localhost/social-network/index.php?page=Authentication&action=Redirect')) : $firstName = $this->validate($_POST['firstName']);
    }

    public function validateLastName()
    {
        return empty($_POST['lastName']) ? die(header('location: http://localhost/social-network/index.php?page=Authentication&action=Redirect')) : $lastName = $this->validate($_POST['lastName']);
    }

    public function validatePseudonym()
    {
        return empty($_POST['pseudonym']) ? die(header('location: http://localhost/social-network/index.php?page=Authentication&action=Redirect')) : $pseudonym = $this->validate($_POST['pseudonym']);
    }

    public function validateEmail()
    {
        return empty($_POST['email']) ? die(header('location: http://localhost/social-network/index.php?page=Authentication&action=Redirect')) : $email = filter_var($this->validate($_POST['email']),
            FILTER_VALIDATE_EMAIL);
    }

    public function validatePassword()
    {
        return empty($_POST['password']) ? die(header('location: http://localhost/social-network/index.php?page=Authentication&action=Redirect')) : $password = password_hash($this->validate($_POST['password']),
            PASSWORD_BCRYPT);
    }

    public function validateNewPassword()
    {
        if ($_POST['new-password'] === $_POST['new-password-repeat']) {
            return empty($_POST['new-password']) || empty($_POST['new-password-repeat']) ? die(header('location: http://localhost/social-network/index.php?page=Authentication&action=Redirect')) : $password = password_hash($this->validate($_POST['new-password']),
                PASSWORD_BCRYPT);
        }
    }

}