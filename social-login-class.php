<?php

//For Configuration key
require_once 'config.php';
// For Instagram
require_once 'lib/instagram-login-api.php';

class socialLogin {

    function instagram() {
        if (!isset($_GET['code'])) {
            // Login URL
            $authUrl = 'https://api.instagram.com/oauth/authorize/?client_id=' . INSTAGRAM_CLIENT_ID . '&redirect_uri=' . urlencode(INSTAGRAM_REDIRECT_URI) . '&response_type=code&scope=basic';
            header('Location: ' . $authUrl);
        } else if (isset($_GET['error'])) {
            echo 'An error occurred: ' . $_GET['error_description'];
        } else if (isset($_GET['code'])) {
            $instagram_ob = new instagram_Client();

            // Get the access token
            $access_token = $instagram_ob->GetAccessToken(INSTAGRAM_CLIENT_ID, INSTAGRAM_REDIRECT_URI, INSTAGRAM_CLIENT_SECRET, $_GET['code']);

            // Get user information
            $data = $instagram_ob->GetUserProfileInfo($access_token);

            $_SESSION['instagram_access_token'] = $access_token;
            // Storing instagram user data into session
            $_SESSION['User'] = $data;
        }
    }

}

?>
