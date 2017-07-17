<?php

/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/17/17
 * Time: 3:48 PM
 */
class containerDrawer
{
    public function drawArticle($textContent, $imgSrc)
    {
        $article = ' <article class="post">
            <div class="post-image"><img src="' . $imgSrc . '">
            </div>
            <div class="heading"><h3><a href="#">3 Secrets to Great Storytelling</a></h3></div>
            <div class="post-text">
                <p>' . $textContent . '<br/></p>
                <button>Comment</button>
            </div>
        </article>';

        echo $article;
    }

    public function drawHeader()
    {
        $header = "<header>
                <a href=\"#\"> <img src=\"../../../images/logo.png\"> </a>
           </header>
         ";

        echo $header;
    }

    public function drawSideBar()
    {
        $sideBar = '<div id="side-bar">
        <a href="profile.php" class="side-bar">My Profile</a>
        <a href="photos.php" class="side-bar">Photos</a>
        <a href="#" class="side-bar">Properties</a>
        <a href="#" class="side-bar">About</a>
        <a href="logout.php" class="side-bar">Log Out</a>
    </div>';
        echo $sideBar;
    }
}