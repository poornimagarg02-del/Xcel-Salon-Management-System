<?php
session_start();
if ($_SESSION['loggedIn']) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Barber Panel</title>
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
                <span class="site-brand__eyebrow">Barber workspace</span>
                <span class="site-brand__name">Xcel Hair Salon</span>
            </div>
        </div>
        <ul>
            <li><a href="barberpanel.php" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="services.php"><i class="fas fa-concierge-bell"></i> Services</a></li>
            <li><a href="timeslot.php"><i class="far fa-clock"></i> Time Slots</a></li>
            <li><a href="showbookingstatustobarber.php"><i class="far fa-calendar-check"></i> Bookings</a></li>
            <li><a href="barber_change_password.php"><i class="fas fa-key"></i> Change Password</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </aside>
    <main class="dashboard-main">
        <div class="dashboard-topbar">
            <div>
                <div class="eyebrow">Barber dashboard</div>
                <h2 class="section-title" style="font-size:28px;">Welcome, <?php echo $_SESSION['name']; ?></h2>
            </div>
            <div class="meta"><?php echo $_SESSION['b_email']; ?></div>
        </div>
        <section class="dashboard-banner">
            <h1>Manage your services and availability with a calmer, cleaner workflow.</h1>
            <p class="lead">Keep your service menu current, update time slots, and review booking demand from one organized workspace.</p>
            <div class="dashboard-cta">
                <a href="services.php" class="site-button">Update Services</a>
                <a href="timeslot.php" class="site-button site-button--secondary">Manage Time Slots</a>
            </div>
        </section>
        <section class="dashboard-grid">
            <a href="services.php" class="dashboard-card">
                <h3>Service Catalog</h3>
                <p>Create and maintain the services customers can choose from.</p>
            </a>
            <a href="timeslot.php" class="dashboard-card">
                <h3>Availability</h3>
                <p>Control when customers can book with accurate slot information.</p>
            </a>
            <a href="showbookingstatustobarber.php" class="dashboard-card">
                <h3>Booking Overview</h3>
                <p>See incoming appointments and keep your day organized.</p>
            </a>
            <a href="barber_change_password.php" class="dashboard-card">
                <h3>Account Security</h3>
                <p>Update your password to keep your professional account secure.</p>
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
