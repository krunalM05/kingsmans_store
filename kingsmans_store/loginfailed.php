<?php
include "includes/loginmodal.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login failed | KIngsman's Store</title>
<!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php 
if(isset($_GET["error"]))
{
echo "<div class='container'>
            <div class='jumbotron home-spacer'>
            <h2> " .$_GET['error']. "</h2>
             <h3>Please enter correct E-mail id and Password</h3>
            <h3>click here to <a href='#' data-toggle='modal' data-target='#loginmodal'> Log in</a> 
            Again or go to <a href='index.php'>index page</a>
      </div> ";
}
?>
</body>
</html>