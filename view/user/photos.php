<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photos</title>
    <link rel="stylesheet" href="css/photos.css">

</head>
<body>
<div id="side-bar">
    <a href="http://localhost/social-network/index.php?page=Browse&action=Profile" class="side-bar">My Profile</a>
    <a href="http://localhost/social-network/index.php?page=Browse&action=Photos" class="side-bar">Photos</a>
    <a href="#" class="side-bar">Properties</a>
    <a href="#" class="side-bar">About</a>
    <a href="http://localhost/social-network/index.php?page=Authentication&action=LogOut" class="side-bar">Log
        Out</a>
</div>


<div id="cont">
    <div id="photos">
        <div class="image-container"><a href="#"><img src="images/img1.jpg" alt="no image"></a></div>
        <div class="image-container"><a href="#"><img src="images/img2.jpg" alt="no image"></a></div>
        <div class="image-container"><a href="#"><img src="images/img1.jpg" alt="no image"></a></div>
        <div class="image-container"><a href="#"><img src="images/img2.jpg" alt="no image"></a></div>
        <div class="image-container"><a href="#"><img src="images/img1.jpg" alt="no image"></a></div>
        <div class="image-container"><a href="#"><img src="images/img2.jpg" alt="no image"></a></div>
        <form method="post" enctype="multipart/form-data"
              action="http://localhost/social-network/index.php?page=Photo&action=Upload">
            <input type="file" name="img">
            <button type="submit">Add</button>
        </form>
    </div>
</div>
</body>
</html>