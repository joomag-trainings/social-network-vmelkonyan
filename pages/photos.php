<?php
$target_dir = "/var/www/html/PhpstormProjects/social-network/uploads";
$upload_file = $target_dir . basename($_FILES['img']['name']);
$message = "No message";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (move_uploaded_file($_FILES['img']['tmp_name'], $upload_file)) {
        $message = "OK";
    } else {
        $message = "Problem";
    }
}
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
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="file" name="img">
            <button type="submit">Add</button>
        </form>
        <?php echo $message ?>
    </div>
</div>
</body>
</html>