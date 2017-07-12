<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
<?php include_once('header.php'); ?>

<div id="edit">
    <div id="cont">
        <h3>Edit Personal Info</h3>
        <form>
            <input type="text" id="name" placeholder="First Name">
            <input type="text" id="sname" placeholder="Last Name">
            <input type="text" id="email" placeholder="Email">
            <input type="password" id="password" placeholder=" Old Password">
            <input type="password" id="new-password" placeholder="New Password">
            <input type="password" id="new-password-repeat" placeholder="Repeat New Password">
            <input type="submit" value="Submit">
        </form>
    </div>
</div>

</body>
</html>