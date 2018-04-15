<?php
error_reporting(E_ALL);
ob_start();
session_start();

define('BASE_URL', filter_var('http://localhost/websolutionspoint/How-to-authenticate-register-user-via-instagram-in-php/', FILTER_SANITIZE_URL));

// For Instagram
define('INSTAGRAM_CLIENT_ID', 'c41887aa56394ec2aa27480917061676');
define('INSTAGRAM_CLIENT_SECRET', '501b2ac9096b4c048e95742565137c94');
define('INSTAGRAM_REDIRECT_URI', 'http://localhost/websolutionspoint/How-to-authenticate-register-user-via-instagram-in-php/login.php?access_provider=instagram');
?>
