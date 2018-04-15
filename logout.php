<?php

require_once 'config.php';

// UNSET ALL INSTAGRAM SESSIONS
if (isset($_SESSION['instagram_access_token']) && !empty($_SESSION['instagram_access_token'])) {
    unset($_SESSION['instagram_access_token']);

    unset($_SESSION['User']);
    session_destroy();

    header('Location: ' . BASE_URL);
}
?>
