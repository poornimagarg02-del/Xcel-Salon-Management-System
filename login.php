<?php
error_reporting(0);
$msg = $_REQUEST['msg'];
if ($msg == 1) {
?>
<script>alert("Please enter correct username and password");</script>
<?php
}
if ($msg == 2) {
?>
<script>alert("Logout Successfully");</script>
<?php
}
if ($msg == 3) {
?>
<script>alert("Please Login First");</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign In</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="image1/logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="ui-system.css" type="text/css">
<style>
body {
    background:
        radial-gradient(circle at top left, rgba(215, 178, 138, 0.28), transparent 22%),
        linear-gradient(180deg, #fbf6ef 0%, #f0e5d8 100%);
}

.auth-copy {
    min-height: 620px;
    border-radius: 36px;
    padding: 38px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    background:
        linear-gradient(180deg, rgba(21, 14, 11, 0.2), rgba(21, 14, 11, 0.64)),
        url("Image1/24.jpg") center/cover no-repeat;
    color: white;
    box-shadow: var(--shadow-soft);
}

.dropdown-wrapper {
    position: relative;
}
</style>
</head>
<body>
<nav class="site-nav">
    <div class="site-nav__inner">
        <div class="site-brand">
            <img src="image1/logo.png" alt="Xcel Hair Salon">
            <div class="site-brand__copy">
                <span class="site-brand__eyebrow">Secure account access</span>
                <span class="site-brand__name">Xcel Hair Salon</span>
            </div>
        </div>
        <ul class="site-links">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="aboutus.php">Why Xcel</a></li>
            <li><a href="contact_us.php">Contact</a></li>
            <li><a href="login.php" class="active">Login</a></li>
            <li><a href="barber_register.php">Barber Register</a></li>
            <li><a href="cust_register.php">Customer Register</a></li>
        </ul>
    </div>
</nav>

<main>
    <section class="section">
        <div class="auth-layout">
            <div class="auth-copy">
                <div class="eyebrow" style="color:#f7d8ba;">Welcome back</div>
                <h1 style="color:#fff7ef;font-size:clamp(34px,5vw,56px);">Sign in to manage bookings, services, and salon operations.</h1>
                <p style="margin-top:18px;color:rgba(255,245,236,0.82);font-size:18px;max-width:520px;">Choose your account type and continue with the workflow built for your role.</p>
            </div>
            <div class="surface-card auth-panel">
                <div class="eyebrow">Account access</div>
                <h2 class="section-title">Sign In</h2>
                <p class="lead" style="margin-bottom:24px;">Use the same login page for admin, barber, and customer accounts.</p>
                <form action="logincode.php" method="post" class="form-stack">
                    <div class="field dropdown-wrapper">
                        <label for="type">Login as</label>
                        <select id="type" name="type">
                            <option value="Admin">Admin</option>
                            <option value="Barber">Barber</option>
                            <option value="Customer" selected>Customer</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" required>
                    </div>
                    <div class="field">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" required>
                    </div>
                    <input type="submit" value="Sign In">
                </form>
            </div>
        </div>
    </section>
</main>

<script src="chatbot.js?v=3"></script>
</body>
</html>
