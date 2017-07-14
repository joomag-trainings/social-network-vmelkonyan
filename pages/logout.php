<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/14/17
 * Time: 5:24 AM
 */
session_start();
unset($_SESSION['username']);
unset($_SESSION['message']);
session_destroy();
header('location: login.html');