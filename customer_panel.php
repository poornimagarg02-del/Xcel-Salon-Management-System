<?php
session_start();
if ($_SESSION['loggedIn']) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer Panel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="image1/logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="ui-system.css" type="text/css">
</head>
<body>
<div class="dashboard-shell">
    <aside class="dashboard-sidebar">
        <div class="site-brand">
            <img src="image1/logo.png" alt="Xcel Hair Salon">
            <div class="site-brand__copy">
                <span class="site-brand__eyebrow">Customer workspace</span>
                <span class="site-brand__name">Xcel Hair Salon</span>
            </div>
        </div>
        <ul>
            <li><a href="customer_panel.php" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="showbarbertocustomer.php"><i class="fas fa-user-tie"></i> Browse Barbers</a></li>
            <li><a href="bookingstatus.php"><i class="far fa-calendar-check"></i> Booking Status</a></li>
            <li><a href="complaint.php"><i class="fas fa-comment-alt"></i> Complaint</a></li>
            <li><a href="customer_change_password.php"><i class="fas fa-key"></i> Change Password</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </aside>
    <main class="dashboard-main">
        <div class="dashboard-topbar">
            <div>
                <div class="eyebrow">Customer dashboard</div>
                <h2 class="section-title" style="font-size:28px;">Welcome, <?php echo $_SESSION['name']; ?></h2>
            </div>
            <div class="meta"><?php echo $_SESSION['c_email']; ?></div>
        </div>
        <section class="dashboard-banner">
            <h1>Book faster, track status, and stay in control of every appointment.</h1>
            <p class="lead">Use your panel to discover barbers, review available services and time slots, and follow the progress of your bookings.</p>
            <div class="dashboard-cta">
                <a href="showbarbertocustomer.php" class="site-button">Find a Barber</a>
                <a href="bookingstatus.php" class="site-button site-button--secondary">Check Booking Status</a>
            </div>
        </section>
        <section class="dashboard-grid">
            <a href="showbarbertocustomer.php" class="dashboard-card">
                <h3>Browse Barbers</h3>
                <p>Compare barbers and move into services and available slots.</p>
            </a>
            <a href="bookingstatus.php" class="dashboard-card">
                <h3>Booking Status</h3>
                <p>Review your current bookings and stay updated on confirmations.</p>
            </a>
            <a href="complaint.php" class="dashboard-card">
                <h3>Complaint Desk</h3>
                <p>Share issues or feedback so the salon team can respond clearly.</p>
            </a>
            <a href="customer_change_password.php" class="dashboard-card">
                <h3>Account Security</h3>
                <p>Keep your profile secure by updating your password any time.</p>
            </a>
        </section>
    </main>
</div>
<script src="chatbot.js?v=3"></script>
</body>
</html>
<?php
} else {
    header("Location:login.php?msg=3");
}
?>
