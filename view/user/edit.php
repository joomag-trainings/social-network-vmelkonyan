<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
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
<div id="edit">
    <div id="cont">
        <h3>Edit Personal Info</h3>
        <form method="post" action='http://localhost/social-network/index.php?page=Edit&action=Edit'>
            <input type="text" id="name" name="firstName" placeholder="First Name">
            <input type="text" id="sname" name="lastName" placeholder="Last Name">
            <input type="text" id="email" name="email" placeholder="Email">
            <input type="text" id="name" name="pseudonym" placeholder="Pseudonym">
            <input type="password" id="password" name="password" placeholder=" Old Password">
            <input type="password" id="new-password" name="new-password" placeholder="New Password">
            <input type="password" id="new-password-repeat" name="new-password-repeat"
                   placeholder="Repeat New Password">
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
</body>
</html>