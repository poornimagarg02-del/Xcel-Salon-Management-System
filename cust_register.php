<?php
error_reporting(0);
session_start();
$flg = $_REQUEST['flg'];
if ($flg == 1) {
?>
<script>alert("Registered Successfully!");</script>
<?php
}
if ($flg == 2) {
?>
<script>alert("not matched");</script>
<?php
}
$_SESSION['secure'] = rand(1000,9999);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer Register</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="image1/logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="ui-system.css" type="text/css">
<style>
.register-visual {
    min-height: 680px;
    border-radius: 36px;
    padding: 38px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    background:
        linear-gradient(180deg, rgba(21, 14, 11, 0.2), rgba(21, 14, 11, 0.64)),
        url("image1/16.jpg") center/cover no-repeat;
    color: white;
    box-shadow: var(--shadow-soft);
}

.captcha-row {
    display: grid;
    gap: 12px;
}

.captcha-row img {
    border-radius: 18px;
    box-shadow: var(--shadow-card);
}
</style>
</head>
<body>
<nav class="site-nav">
    <div class="site-nav__inner">
        <div class="site-brand">
            <img src="image1/logo.png" alt="Xcel Hair Salon">
            <div class="site-brand__copy">
                <span class="site-brand__eyebrow">Customer onboarding</span>
                <span class="site-brand__name">Xcel Hair Salon</span>
            </div>
        </div>
        <ul class="site-links">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="aboutus.php">Why Xcel</a></li>
            <li><a href="contact_us.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="barber_register.php">Barber Register</a></li>
            <li><a href="cust_register.php" class="active">Customer Register</a></li>
        </ul>
    </div>
</nav>

<main>
    <section class="section">
        <div class="auth-layout">
            <div class="register-visual">
                <div class="eyebrow" style="color:#f7d8ba;">Join as customer</div>
                <h1 style="color:#fff7ef;font-size:clamp(34px,5vw,56px);">Create your account and start booking without the queue guesswork.</h1>
                <p style="margin-top:18px;color:rgba(255,245,236,0.82);font-size:18px;max-width:520px;">Register once to browse barbers, review services, and check your booking status from a cleaner customer experience.</p>
            </div>
            <div class="surface-card auth-panel">
                <div class="eyebrow">Registration</div>
                <h2 class="section-title">Customer Register</h2>
                <p class="lead" style="margin-bottom:24px;">All fields are mandatory.</p>
                <form action="cust_reg_code.php" method="post" class="form-stack">
                    <input type="hidden" name="type" value="Customer">
                    <div class="field">
                        <label for="name">Name</label>
                        <input id="name" type="text" name="name" required>
                    </div>
                    <div class="field">
                        <label for="contactno">Contact Number</label>
                        <input id="contactno" type="number" name="contactno" required>
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" required>
                    </div>
                    <div class="field">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" required>
                    </div>
                    <div class="field">
                        <label for="cpassword">Confirm Password</label>
                        <input id="cpassword" type="password" name="cpassword" required>
                    </div>
                    <div class="field captcha-row">
                        <label for="cap">Captcha</label>
                        <img src="captcha/generate.php" height="50" width="140" alt="Captcha">
                        <input id="cap" type="number" name="cap" required>
                    </div>
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
    </section>
</main>

<footer id="foot">
    <div id="foot1">
        <div id="icon_above">
            <div id="icon_div">
                <div id="about">Xcel Hair Salon</div><br>
                Poornima University<br>
                Vidhani, Jaipur<br><br>
                <span style="color:#f1cfad;font-size:15px;">91*******<br><br>contact@xcelhairsalon.ie</span>
            </div>
            <div id="content">
                <img src="image1/logo.png" alt="Xcel Hair Salon" style="width:84px;height:84px;padding:10px;border-radius:22px;background:rgba(255,255,255,0.08);margin-bottom:18px;">
                Register once, then move through salon discovery, service selection, and appointment tracking in a much cleaner customer journey.
            </div>
        </div>
        <div id="icon_below">
            <a href="#"><i class="fab fa-facebook-f" style="color:#7fb0ff;"></i></a>
            <a href="#"><i class="fab fa-twitter" style="color:#84d8ff;"></i></a>
            <a href="#"><i class="far fa-envelope" style="color:#ff9c7a;"></i></a>
            <a href="#"><i class="fab fa-whatsapp" style="color:#7fe0a5;"></i></a>
        </div>
    </div>
</footer>

<script src="chatbot.js?v=3"></script>
</body>
</html>
