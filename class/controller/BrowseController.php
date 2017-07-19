<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/19/17
 * Time: 2:46 PM
 */

namespace controller;


class BrowseController
{
    public function actionPhotos()
    {
        require('./view/user/photos.php');
    }

    public function actionProfile()
    {
        require('./view/user/profile.php');

    }
}