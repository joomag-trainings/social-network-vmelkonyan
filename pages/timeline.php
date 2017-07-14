<?php
require_once('checkSession.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Timeline</title>
    <link rel="stylesheet" href="../css/timeline.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div id="main">
    <?php include_once('header.php');
    include_once('sideBar.php'); ?>

    <div id="timeLine">
        <?php include('article.php');
        include('article.php');
        ?>
    </div>

    <div id="right">

        <div class="card">
            <img src="../images/profile.jpeg" alt="John">
            <div class="container">
                <h1>Name Surname</h1>
                <p class="title">Writer, Editor Example</p>
                <p>Harvard University</p>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <p>
                    <button>Edit</button>
                </p>
            </div>

        </div>
        <form id="search-cont">

            <input type="search" id="search" placeholder="Search">

        </form>
    </div>

</div>
</body>
</html>