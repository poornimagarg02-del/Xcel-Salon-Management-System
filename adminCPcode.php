<?php
include 'config.php';

if (!isset($_SESSION['a_id'])) {
    header("Location: login.php?msg=3");
    exit();
}

$a_id = $_SESSION['a_id'];
$op = mysqli_real_escape_string($conn, $_POST['oldpass']);
$np = mysqli_real_escape_string($conn, $_POST['newpass']);
$cp = mysqli_real_escape_string($conn, $_POST['confirmpass']);

$query1 = "SELECT password FROM admin WHERE id='$a_id'";
$res = mysqli_query($conn, $query1);

if ($row = mysqli_fetch_assoc($res)) {
    if ($row['password'] == $op) {
        if ($np == $cp) {
            $query = "UPDATE admin SET password='$np' WHERE id='$a_id'";
            mysqli_query($conn, $query);
            alert_redirect("Password Changed", "admin_change_password.php");
        } else {
            alert_redirect("New password and confirm password are not same..", "admin_change_password.php");
        }
    } else {
        alert_redirect("Entered password and old password are not same..", "admin_change_password.php");
    }
}
?>
