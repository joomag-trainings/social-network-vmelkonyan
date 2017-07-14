<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/14/17
 * Time: 5:59 AM
 */

session_start();
if (!isset($_SESSION['user'])) {
    header('location: login.html');
}
