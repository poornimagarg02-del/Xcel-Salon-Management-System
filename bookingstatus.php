<?php
include_once 'config.php';

if (!isset($_SESSION['c_id'])) {
    header("Location: login.php?msg=3");
    exit();
}

$cid = $_SESSION['c_id'];

$query = "SELECT * FROM booking WHERE cid='$cid' ORDER BY oid DESC";
$res = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>My Booking Status | Xcel Salon</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="image1/logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="ui-system.css" type="text/css">
<style>
body {
    background:
        radial-gradient(circle at top right, rgba(215, 178, 138, 0.2), transparent 22%),
        linear-gradient(180deg, #fbf7f1 0%, #f5ede3 100%);
}

.booking-table-container {
    margin-top: 40px;
    padding: 20px;
    background: rgba(255, 255, 255, 0.6);
    border-radius: 24px;
    box-shadow: var(--shadow-soft);
    border: 1px solid var(--border-light);
}

.status-badge {
    display: inline-block;
    padding: 4px 12px;
    border-radius: 999px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
}
.status-pending { background: #fff4e5; color: #b76e00; }
.status-confirmed { background: #e6fcf5; color: #087f5b; }
.status-cancelled { background: #fff5f5; color: #c92a2a; }
</style>
</head>
<body>
<nav class="site-nav">
    <div class="site-nav__inner">
        <div class="site-brand">
            <img src="image1/logo.png" alt="Xcel Hair Salon">
            <div class="site-brand__copy">
                <span class="site-brand__eyebrow">Customer Dashboard</span>
                <span class="site-brand__name">Xcel Hair Salon</span>
            </div>
        </div>
        <ul class="site-links">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="showbarbertocustomer.php">Barbers</a></li>
            <li><a href="complaint.php">Complaint</a></li>
            <li><a href="bookingstatus.php" class="active">Booking Status</a></li>
            <li><a href="customer_panel.php">Panel</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

<main>
    <section class="section">
        <div class="section-heading">
            <div class="eyebrow">Your appointments</div>
            <h2 class="section-title">Booking Status</h2>
            <p class="lead">Track your upcoming salon visits and review previous service details.</p>
        </div>

        <div class="booking-table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Service</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 0;
                    while ($row = mysqli_fetch_array($res, MYSQLI_BOTH)) {
                        $count++;
                        $statusClass = 'status-pending';
                        if (strtolower($row['status']) == 'confirmed') $statusClass = 'status-confirmed';
                        if (strtolower($row['status']) == 'cancelled') $statusClass = 'status-cancelled';
                    ?>
                    <tr>
                        <td><strong>#<?php echo $row['oid']; ?></strong></td>
                        <td><?php echo $row['service']; ?></td>
                        <td>₹<?php echo $row['price']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td><span class="status-badge <?php echo $statusClass; ?>"><?php echo $row['status']; ?></span></td>
                        <td>
                            <a href="C_deletebooking.php?id=<?php echo $row['oid']; ?>" style="color:var(--error); font-size:14px; font-weight:600;" onclick="return confirm('Are you sure you want to cancel this booking?')">Cancel</a>
                        </td>
                    </tr>
                    <?php
                    }
                    if ($count == 0) {
                        echo "<tr><td colspan='7' style='text-align:center; padding:40px; color:var(--text-meta);'>No bookings found. Start by choosing a barber!</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <section class="section" style="padding-top:0;">
        <div class="surface-card" style="display:flex; gap:40px; align-items:center;">
             <div style="flex:1;">
                <div class="eyebrow">Need assistance?</div>
                <h3 class="section-title" style="font-size:24px;">Manage your appointments with ease.</h3>
                <p>If you need to change your appointment time, please cancel the existing one and book a new slot. For urgent inquiries, use our contact form or chat with us.</p>
             </div>
             <div style="flex:0 0 300px; text-align:right;">
                <a href="contact_us.php" class="site-button site-button--secondary">Contact Support</a>
             </div>
        </div>
    </section>
</main>

<footer id="foot" style="margin-top:80px;">
    <div id="foot1">
        <div id="icon_above" style="display:flex; padding:60px 100px; gap:80px; color:white;">
            <div style="flex:1;">
                <div id="about" style="border-bottom:1px solid rgba(255,255,255,0.2); padding-bottom:10px; margin-bottom:20px; font-weight:bold; font-size:20px;">Xcel Hair Salon</div>
                Poornima University<br>
                Vidhani, Jaipur<br>
                Rajasthan, India<br><br>
                <span style="color:#f7d8ba;">91*******<br>contact@xcelhairsalon.ie</span>
            </div>
            <div style="flex:2; background:rgba(255,255,255,0.05); padding:30px; border-radius:24px; font-size:15px; line-height:1.6; text-align:justify;">
                <img src="image1/logo.png" height="60" width="60" style="margin-bottom:20px;"/><br>
                Xcel Hair Salon is a premium CRM platform designed to modernize salon operations. Our automated booking system eliminates the uncertainty of waiting in queues, providing a polished experience for both customers and barbers. Manage your business or your style right from your fingertips.
            </div>
        </div>
    </div>
</footer>

<script src="chatbot.js?v=3"></script>
</body>
</html>
