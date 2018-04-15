<?php require_once 'config.php'; ?>
<!doctype html>
<html>
    <head><meta charset="utf-8">
        <title>Login</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/oauthpopup.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                //For Instagram
                $('#instagram').oauthpopup({
                    path: 'login.php?access_provider=instagram',
                    width: 700,
                    height: 500
                });
            });
        </script>

    </head>
    <body>
        <div class="container">

            <?php if (!isset($_SESSION['User'])) { ?>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Login with Instagram</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <img src='images/instagram.png' id='instagram'  style='cursor:pointer;float:left;margin-right:10%;'  alt="Sign In with Instagram"/>
                    </div>
                </div>
            <?php } ?>

            <?php
            // FOR INSTAGRAM
            if (isset($_SESSION['instagram_access_token'])) {
                // print_r($_SESSION['User']);
                ?>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th bgcolor="#f1f1f1" colspan="2">USER PROFILE INFORMATION (BY INSTAGRAM)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Unique Id</td>
                            <td><b><?= $_SESSION['User']['id'] ?></b></td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td><?= $_SESSION['User']['username'] ?></td>
                        </tr>
                        <tr>
                            <td>Profile Picture</td>
                            <td><img src="<?= $_SESSION['User']['profile_picture'] ?>" width="100" height="100" alt="Profile Picture"></td>
                        </tr>
                        <tr>
                            <td>Full Name</td>
                            <td><?= $_SESSION['User']['full_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Bio</td>
                            <td><?= $_SESSION['User']['bio'] ?></td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td><a href="<?= $_SESSION['User']['website'] ?>" target="_blank">Website Link</a></td>
                        </tr>
                        <tr>
                            <td>Is Business</td>
                            <td><?= $_SESSION['User']['is_business'] ?></td>
                        </tr>
                        <tr>
                            <td>Media</td>
                            <td><?= $_SESSION['User']['counts']['media'] ?></td>
                        </tr>
                        <tr>
                            <td>Follows</td>
                            <td><?= $_SESSION['User']['counts']['follows'] ?></td>
                        </tr>
                        <tr>
                            <td>Followed By</td>
                            <td><?= $_SESSION['User']['counts']['followed_by'] ?></td>
                        </tr>
                        <tr>
                            <td>Logout</td>
                            <td><a href="logout.php">Logout</a></td>
                        </tr>
                    </tbody>
                </table>
            <?php } ?>
        </div>

    </body>

</html>
