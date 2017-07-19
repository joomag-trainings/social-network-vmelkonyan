<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link href="css/animate.css" rel="stylesheet"/>
    <link href="css/waypoints.css" rel="stylesheet"/>
    <script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="js/waypoints.js" type="text/javascript"></script>
    <title>Register</title>
</head>
<body>
<div class="signIn">
    <div class="inner">
        <div class="reg-box">
            <section class="os-animation" data-os-animation="bounceInUp" data-os-animation-delay="0s">
                <h1>Sign In</h1>
            </section>
            <section class="os-animation" data-os-animation="bounceInUp" data-os-animation-delay=".1s">
                <form method="post" action="http://localhost/social-network/index.php?page=Authentication&action=LogIn">
                    <input type="text" name="pseudonym" placeholder="Pseudonym">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" id="btn">Sign In</button>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
