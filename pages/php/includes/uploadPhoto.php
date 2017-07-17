<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/17/17
 * Time: 5:10 PM
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $handler = new PhotoUploadHandler();
    $message = $handler->addPhoto($_FILES);
    echo $message;
}