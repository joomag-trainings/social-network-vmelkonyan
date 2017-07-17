<?php
include_once('php/includes/uploadPhoto.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photos</title>
    <link rel="stylesheet" href="../css/photos.css">

</head>
<body>
<?php include_once('header.php');
include_once('sideBar.php'); ?>

<div id="cont">
    <div id="photos">
        <div class="image-container"><a href="#"><img src="../images/img1.jpg" alt="no image"></a></div>
        <div class="image-container"><a href="#"><img src="../images/img2.jpg" alt="no image"></a></div>
        <div class="image-container"><a href="#"><img src="../images/img1.jpg" alt="no image"></a></div>
        <div class="image-container"><a href="#"><img src="../images/img2.jpg" alt="no image"></a></div>
        <div class="image-container"><a href="#"><img src="../images/img1.jpg" alt="no image"></a></div>
        <div class="image-container"><a href="#"> <img src="../images/img2.jpg" alt="no image"></a></div>
        <form method="post" enctype="multipart/form-data"
              action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="file" name="img">
            <button type="submit">Add</button>
        </form>
        <?= $message ?>
    </div>
</div>
</body>
</html>