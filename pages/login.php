<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/14/17
 * Time: 5:02 AM
 */

session_start();

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pseudonym = $pss = $login = $password = ' ';
    if (isset($_POST['pseudonym']) && isset($_POST['pss'])) {
        $pseudonym = validate($_POST['pseudonym']);
        $pss = validate($_POST['pss']);
        $handle = fopen('users.txt', 'r');

        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $temp = explode(' ', $line);
                if ($temp[0] === $pseudonym && password_verify($pss, $temp[1])) {
                    $_SESSION['message'] = "Logged in as " . $pseudonym;
                    $_SESSION['user'] = $pseudonym;
                    header('location: timeline.php');
                    die();
                }
            }
            fclose($handle);
            $_SESSION['message'] = "Invalid Username or Password";
            header('location: login.html');
            die();

        }
    } else {
        echo "error";
    }

}