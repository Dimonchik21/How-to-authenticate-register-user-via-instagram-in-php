<?php
require 'social-login-class.php';

$social_obj = new socialLogin();

// IF LOGIN WITH INSTAGRAM
if (isset($_GET['access_provider'])) {
    $social_obj->instagram();
}
?>

<!-- AFTER AUTHENTICATION CLOSE THE WINDOW  -->
<script type="text/javascript">
    window.close();
</script>
