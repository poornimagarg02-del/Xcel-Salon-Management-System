<?php
include 'config.php';

$secure = $_SESSION['secure'];
$cap = $_POST['cap'];
$fullname = mysqli_real_escape_string($conn, $_POST['name']);
$gender = $_POST['gender'];
$pno = $_POST['contactno'];
$location = mysqli_real_escape_string($conn, $_POST['address']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

// Validate
if ($password !== $cpassword) {
    alert_redirect("Passwords do not match", "barber_register.php");
} elseif (strlen($pno) != 10) {
    alert_redirect("Please enter a correct 10-digit phone number", "barber_register.php");
} elseif ($secure != $cap) {
    alert_redirect("Captcha does not match", "barber_register.php");
} else {
    // Check if email already exists
    $check_query = "SELECT * FROM barber WHERE email='$email'";
    $check_res = mysqli_query($conn, $check_query);
    
    if (mysqli_num_rows($check_res) > 0) {
        alert_redirect("Barber already registered with this email ID", "barber_register.php");
    } else {
        $b_id = rand(1000, 9999);
        $query = "INSERT INTO barber(id, name, gender, contact, address, email, password, usertype, vstatus) 
                  VALUES('$b_id', '$fullname', '$gender', '$pno', '$location', '$email', '$password', 'barber', 'pending')";
        
        if (mysqli_query($conn, $query)) {
            alert_redirect("Registered Successfully. Please Login and check your verification status", "login.php");
        } else {
            alert_redirect("Registration failed: " . mysqli_error($conn), "barber_register.php");
        }
    }
}
?>
