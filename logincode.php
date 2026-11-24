<?php
include 'config.php';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$type = $_POST['type'];

if ($type == "Barber") {
    $query = "SELECT * FROM barber WHERE email='$email' AND password='$password'";
    $res = mysqli_query($conn, $query);
    if ($row = mysqli_fetch_assoc($res)) {
        $_SESSION['loggedIn'] = true;
        $_SESSION['b_id'] = $row['id'];
        $_SESSION['b_email'] = $row['email'];
        $_SESSION['name'] = $row['name'];

        if ($row['vstatus'] == "Successful") {
            header("Location: barberpanel.php");
            exit();
        } else {
            // Need to show status page. 
            // We can continue to the HTML part below if headers aren't sent.
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign In - Verification Status</title>
<link rel="shortcut icon" href="image1/logo.png" type="image/x-icon">
<link rel="stylesheet" href="ui-system.css" type="text/css">
<style>
#select1 {
    min-height: 100vh;
    background: radial-gradient(circle at top right, rgba(215, 178, 138, 0.3), transparent 22%),
                linear-gradient(180deg, #fbf7f1 0%, #f5ede3 100%);
    display: flex;
    justify-content: center;
    align-items: center;
}
.status-card {
    background: rgba(255, 255, 255, 0.8);
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    max-width: 500px;
    width: 90%;
    border: 1px solid var(--border-light);
}
.status-item {
    margin-bottom: 1rem;
    border-bottom: 1px solid #eee;
    padding-bottom: 0.5rem;
}
.status-label {
    font-weight: bold;
    color: var(--primary);
}
</style>
</head>
<body>
<nav class="site-nav">
    <div class="site-nav__inner">
        <div class="site-brand">
            <img src="image1/logo.png" alt="Xcel Hair Salon">
            <div class="site-brand__copy">
                <span class="site-brand__eyebrow">Verification Status</span>
                <span class="site-brand__name">Xcel Hair Salon</span>
            </div>
        </div>
        <ul class="site-links">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

<div id="select1">
    <div class="status-card">
        <h2 class="section-title" style="margin-bottom:1rem;">Account Verification Status</h2>
        <div class="status-item"><span class="status-label">ID:</span> <?php echo $row['id']; ?></div>
        <div class="status-item"><span class="status-label">Name:</span> <?php echo $row['name']; ?></div>
        <div class="status-item"><span class="status-label">Email:</span> <?php echo $row['email']; ?></div>
        <div class="status-item"><span class="status-label">Phone:</span> <?php echo $row['contact']; ?></div>
        <div class="status-item">
            <span class="status-label">Verification:</span> 
            <span style="color:red; font-weight:bold;"><?php echo $row['vstatus']; ?></span>
        </div>
        <p class="meta" style="margin-top:1rem;">Please wait while our administrator verifies your account. You will be able to access the dashboard once verified.</p>
        <a href="logout.php" class="site-button" style="margin-top:1rem;">Log Out</a>
    </div>
</div>
<script src="chatbot.js?v=3"></script>
</body>
</html>
<?php
            exit();
        }
    } else {
        echo "<script>alert('Incorrect email or password for Barber'); window.location='login.php';</script>";
        exit();
    }
} else if ($type == "Admin") {
    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $res = mysqli_query($conn, $query);
    if ($row = mysqli_fetch_assoc($res)) {
        $_SESSION['loggedIn'] = true;
        $_SESSION['a_id'] = $row['id'];
        header("Location: adminpanel.php");
        exit();
    } else {
        echo "<script>alert('Wrong Email or password for Admin'); window.location='login.php';</script>";
        exit();
    }
} else if ($type == "Customer") {
    $query = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
    $res = mysqli_query($conn, $query);
    if ($row = mysqli_fetch_assoc($res)) {
        $_SESSION['loggedIn'] = true;
        $_SESSION['c_id'] = $row['id'];
        $_SESSION['c_email'] = $row['email'];
        $_SESSION['name'] = $row['fullname'];
        header("Location: customer_panel.php");
        exit();
    } else {
        echo "<script>alert('Incorrect email or password for Customer'); window.location='login.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Invalid account type seçti'); window.location='login.php';</script>";
    exit();
}
?>
