<?php

// This page sets the user password
require("includes/common.php");

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);

$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);

$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
$new_pass1 = MD5($new_pass1);

$query = "SELECT email FROM users WHERE email ='" . $email . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$ori_email = $row['email'];

if ($new_pass != $new_pass1) {
    $error= "<span class='red'> The two passwords don\'t match </span>";
    header('location: settings.php?error=' . $error);
} else {
    if ($ori_email == $email) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $email . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        $error="<span style='color:green'>New Password is Successfully set, Now you can login.</span>";
        header('location: forgotpass.php?errorup='.$error);
    } else
    {
        $error=  "<span class='red'> Not a register Email Address  </span>";
        header('location: forgotpass.php?errorp='.$error);
    }
}
?>