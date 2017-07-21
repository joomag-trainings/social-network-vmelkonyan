<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/21/17
 * Time: 3:55 AM
 */

namespace controller;


abstract class AbstractController
{

    /**
     * AbstractController constructor.
     */
    public function __construct()
    {
        if (!isset($_SESSION['user'])) {
            header('location: http://localhost/social-network/index.php?page=Authentication&action=Redirect');
        }
    }
}