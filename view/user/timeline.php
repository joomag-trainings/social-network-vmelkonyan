<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Timeline</title>
    <link rel="stylesheet" href="css/timeline.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div id="main">
    <div id="side-bar">
        <a href="http://localhost/social-network/index.php?page=Browse&action=Profile" class="side-bar">My Profile</a>
        <a href="http://localhost/social-network/index.php?page=Browse&action=Photos" class="side-bar">Photos</a>
        <a href="http://localhost/social-network/index.php?page=Browse&action=Timeline" class="side-bar">Timeline</a>
        <a href="#" class="side-bar">About</a>
        <a href="http://localhost/social-network/index.php?page=Authentication&action=LogOut" class="side-bar">Log
            Out</a>
        <form class="side-bar" method="post" action="http://localhost/social-network/index.php?page=Search&action=Find">
            <input id="search" name="query" type="search" placeholder="Search..."></form>
    </div>

    <div id="timeLine">
        <article class="post">
            <div class="post-image"><img src="images/post1.jpg">
            </div>
            <div class="heading"><h3><a href="#">3 Secrets to Great Storytelling</a></h3></div>
            <div class="post-text">
                <p>Now, this sounds like an almost<br/>
                    embarrassingly obvious observation,<br/>
                    and when I mention it<br/>
                    in my writing seminars I don’t<br/>
                    often see people furiously taking<br/>
                    notes, muttering, “Man,<br/>
                    are you getting this stuff?</p>
                <button>Comment</button>
            </div>
        </article>
    </div>
</div>
</body>
</html>