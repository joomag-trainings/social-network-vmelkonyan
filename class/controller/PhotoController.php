<?php
/**
 * Created by PhpStorm.
 * UserModel: moof
 * Date: 7/19/17
 * Time: 2:52 PM
 */

namespace controller;


class PhotoController
{

    const TARGET_DIR = "/var/www/html/social-network/uploads/";

    public function actionUpload()
    {
        $uploadFile = self::TARGET_DIR . basename($_FILES['img']['name']);

        if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile)) {
            $message = "OK";
            var_dump($message);
            require './view/user/photos.php';
        } else {
            $message = "Problem";
            var_dump($message);
        }
        return $message;
    }

}