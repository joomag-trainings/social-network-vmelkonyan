<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/12/17
 * Time: 1:57 AM
 */
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $initializer = new UserInitializer();
    $user = $initializer->initializeUser($_POST['firstName'], $_POST['lastName'], $_POST['pseudonym'], $_POST['email'],
        $_POST['password']);
    $db = new Database();
    $db->addUserToDb($user);
    $_SESSION['user'] = $user->getPseudonym();
    header('location: ../../timeline.php');
    die;
} else {
    header('location: ../../register.html');
    die;
}