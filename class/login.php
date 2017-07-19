<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/14/17
 * Time: 5:02 AM
 */

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $authenticator = new Authenticator();
    $authenticator->login($_POST['pseudonym'], $_POST['password']);
} else {
    header('location: ../../login.php');
    die();
}