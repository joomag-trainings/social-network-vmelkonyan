<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/12/17
 * Time: 1:57 AM
 */
session_start();

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $lastName = $pseudonym = $email = $password = "";
    if (empty($_POST['firstName'])) {
        header('location: register.html');
        die();
    } else {
        $firstName = validate($_POST['firstName']);
    }

    if (empty($_POST['lastName'])) {
        header('location: register.html');
        die();
    } else {
        $lastName = validate($_POST['lastName']);
    }

    if (empty($_POST['pseudonym'])) {
        header('location: register.html');
        die();
    } else {
        $pseudonym = validate($_POST['pseudonym']);
    }

    if (empty($_POST['email'])) {
        header('location: register.html');
        die();
    } else {
        $email = validate($_POST['email']);
    }

    if (empty($_POST['pss'])) {
        header('location: register.html');
        die();
    } else {
        $password = validate($_POST['pss']);
        $password = password_hash($password, PASSWORD_BCRYPT);

    }

    $entry = $pseudonym . " " . $password . " \n";
    $handle = fopen('users.txt', 'a');
    var_dump($handle);
    fwrite($handle, $entry);
    fclose($handle);
    $_SESSION['user'] = $pseudonym;
    header('location: timeline.php');
    die;
}