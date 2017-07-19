<?php
if (!isset($_SESSION['user'])) {
    header('location: "http://localhost/social-network/index.php?page=Authentication&action=Redirect"');
}
