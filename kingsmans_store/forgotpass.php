<?php
require_once("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>forgot possword |  Kingsman's Laptop Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Set New Password</h4>
                    <form action="forgotpass_script.php" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" name="e-mail"  placeholder="Enter valid email Address" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        <?php
                        {
                            if(isset($_GET["errorp"]))
                            {
                                echo $_GET["errorp"];
                            }
                        }
                        ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter New Password" required = "true" pattern=".{8,}">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true" pattern=".{8,}">
                        <?php
                        {
                            if(isset($_GET["error"]))
                            {
                                echo $_GET["error"];
                            }
                        }
                        ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Set Password</button>
                        <br>
                        <?php
                        {
                            if(isset($_GET["errorup"]))
                            {
                                echo $_GET["errorup"];
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <!--Footer-->
        <div class="navbar-fixed-bottom">
        <?php
        include 'includes/footer.php';
        ?>
        </div>
        <!--Footer end-->
    </body>
</html>