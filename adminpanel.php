<?php
session_start();
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Dashboard | Xcel Salon</title>
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
                <span class="site-brand__eyebrow">Administration</span>
                <span class="site-brand__name">Xcel Hair Salon</span>
            </div>
        </div>
        <ul>
            <li><a href="adminpanel.php" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="showbarbers.php"><i class="fas fa-cut"></i> Manage Barbers</a></li>
            <li><a href="showcustomers.php"><i class="fas fa-users"></i> Customers</a></li>
            <li><a href="showservicestoadmin.php"><i class="fas fa-spa"></i> Services</a></li>
            <li><a href="showtimeslot.php"><i class="far fa-clock"></i> Time Slots</a></li>
            <li><a href="showbookingstatustoadmin.php"><i class="far fa-calendar-check"></i> Bookings</a></li>
            <li><a href="showcomplaints.php"><i class="fas fa-exclamation-circle"></i> Complaints</a></li>
            <li><a href="showcontactstoadmin.php"><i class="fas fa-envelope"></i> Contact Messages</a></li>
            <li><a href="shownewadmin.php"><i class="fas fa-user-shield"></i> Admins</a></li>
            <li><a href="create_admin.php"><i class="fas fa-user-plus"></i> Create Admin</a></li>
        </ul>
    </aside>
    <main class="dashboard-main">
        <div class="dashboard-topbar">
            <div>
                <div class="eyebrow">Operations center</div>
                <h2 class="section-title" style="font-size:28px;">Dashboard Overview</h2>
            </div>
            <div class="dashboard-cta" style="margin-top:0;">
                <a href="admin_change_password.php" class="site-button site-button--secondary">Change Password</a>
                <a href="logout.php" class="site-button">Logout</a>
            </div>
        </div>
        <section class="dashboard-banner">
            <h1>Manage the full salon operation from one polished control center.</h1>
            <p class="lead">Oversee staff, customers, services, time slots, bookings, complaints, contact requests, and admin access with a consistent role-based workflow.</p>
        </section>
        <section class="dashboard-grid">
            <a href="showbarbers.php" class="dashboard-card"><h3>Barbers</h3><p>Review staff records, edit details, and control availability.</p></a>
            <a href="showcustomers.php" class="dashboard-card"><h3>Customers</h3><p>Monitor customer records and keep account data organized.</p></a>
            <a href="showservicestoadmin.php" class="dashboard-card"><h3>Services</h3><p>Inspect current services and their pricing structure.</p></a>
            <a href="showtimeslot.php" class="dashboard-card"><h3>Time Slots</h3><p>Ensure appointment capacity stays aligned with demand.</p></a>
            <a href="showbookingstatustoadmin.php" class="dashboard-card"><h3>Bookings</h3><p>Track bookings across the platform and catch issues early.</p></a>
            <a href="showcomplaints.php" class="dashboard-card"><h3>Complaints</h3><p>Address customer concerns with better visibility and follow-up.</p></a>
            <a href="showcontactstoadmin.php" class="dashboard-card"><h3>Contact Messages</h3><p>Review incoming inquiries from the public-facing site.</p></a>
            <a href="shownewadmin.php" class="dashboard-card"><h3>Admins</h3><p>Maintain internal access with a cleaner admin directory.</p></a>
            <a href="create_admin.php" class="dashboard-card"><h3>Create Admin</h3><p>Add new admin users without leaving the dashboard flow.</p></a>
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
