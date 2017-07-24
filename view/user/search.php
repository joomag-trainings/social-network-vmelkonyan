<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Results</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
<div id="side-bar">
    <a href="http://localhost/social-network/index.php?page=Browse&action=Profile" class="side-bar">My Profile</a>
    <a href="http://localhost/social-network/index.php?page=Browse&action=Photos" class="side-bar">Photos</a>
    <a href="http://localhost/social-network/index.php?page=Browse&action=Timeline" class="side-bar">Timeline</a>
    <a href="#" class="side-bar">About</a>
    <a href="http://localhost/social-network/index.php?page=Authentication&action=LogOut" class="side-bar">
        Log Out</a>
    <form class="side-bar" method="post" action="http://localhost/social-network/index.php?page=Search&action=Find">
        <input id="search" name="query" type="search" placeholder="Search..."></form>
</div>
<?= $cont ?>

</body>
</html>
