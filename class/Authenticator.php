<?php

/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/17/17
 * Time: 4:04 PM
 */
class Authenticator
{

    public function login($pseudonym, $password)
    {
        $db = new Database();
        if ($db->checkIfUserExists($pseudonym, $password)) {
            $_SESSION['user'] = $pseudonym;
            $_SESSION['message'] = "Logged In";
            header('location: ../../timeline.php');
            die();
        } else {
            header('location: ../../login.php');
            die();
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        unset($_SESSION['message']);
        session_destroy();
        header('location: ../../login.php');
    }
}