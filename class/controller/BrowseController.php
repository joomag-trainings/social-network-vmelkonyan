<?php

namespace controller;


class BrowseController extends AbstractController
{
    /**
     * BrowseController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function actionPhotos()
    {
        require('./view/user/photos.php');
    }

    public function actionProfile()
    {
        require('./view/user/profile.php');

    }

    public function actionEdit()
    {
        require('./view/user/edit.php');
    }

    public function actionTimeline()
    {
        require('./view/user/timeline.php');
    }
}