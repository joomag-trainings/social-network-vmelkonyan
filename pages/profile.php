<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="main">
    <?php include_once('header.php');
    include_once('sideBar.php'); ?>

    <div id="profile">
        <div id="profile-pic"><img src="../images/profilepic.png" id="profilepic"></div>
        <div id="info">
            <ul>
                <li>Name: name</li>
                <li>Surname: sname</li>
                <li>Email: mail</li>
                <li>Gender: gend</li>
                <li>Country: count</li>
                <li>Phone Number: 374665989</li>
                <li>
                    <a href="edit.php">
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