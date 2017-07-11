<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/12/17
 * Time: 1:57 AM
 */
$firstName = $lastName = $pseudonym = $email = $password = " ";
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = validate($_POST['firstName']);
    $lastName = validate($_POST['lastName']);
    $pseudonym = validate($_POST['pseudonym']);
    $email = validate($_POST['email']);
    $password = validate($_POST['pss']);
    var_dump($password);
    header('location: profile.html');
    die();
}

?>