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
        <a href="#" class="side-bar">Properties</a>
        <a href="#" class="side-bar">About</a>
        <a href="http://localhost/social-network/index.php?page=Authentication&action=LogOut" class="side-bar">Log
            Out</a>
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

    <div id="right">

        <div class="card">
            <img src="images/profile.jpeg" alt="John">
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