<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
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