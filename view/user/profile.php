<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="main">
    <div id="side-bar">
        <a href="http://localhost/social-network/index.php?page=Browse&action=Profile" class="side-bar">My Profile</a>
        <a href="http://localhost/social-network/index.php?page=Browse&action=Photos" class="side-bar">Photos</a>
        <a href="#" class="side-bar">Properties</a>
        <a href="#" class="side-bar">About</a>
        <a href="http://localhost/social-network/index.php?page=Authentication&action=LogOut" class="side-bar">
            Log Out</a>
    </div>
    <div id="profile">
        <div id="profile-pic"><img src="images/profilepic.png" id="profilepic"></div>
        <div id="info">
            <ul>
                <li>Name: <?= $_SESSION['username']['firstName'] ?></li>
                <li>Surname: <?= $_SESSION['username']['lastName'] ?></li>
                <li>Email: <?= $_SESSION['username']['email'] ?></li>
                <li>Pseudonym: <?= $_SESSION['username']['pseudonym'] ?></li>
                <li>
                    <a href="http://localhost/social-network/index.php?page=Browse&action=Edit">
                        <button>Edit personal information</button>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <div></div>

</div>
</body>
</html>