<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="image1/logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="ui-system.css" type="text/css">
<style>
.contact-visual {
    min-height: 620px;
    border-radius: 36px;
    padding: 36px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    background:
        linear-gradient(180deg, rgba(22, 14, 10, 0.2), rgba(22, 14, 10, 0.62)),
        url("image1/15.jpg") center/cover no-repeat;
    color: white;
    box-shadow: var(--shadow-soft);
}

.contact-form-card {
    padding: 32px;
}

.contact-form-card .field {
    display: grid;
    gap: 8px;
}
</style>
</head>
<body>
<nav class="site-nav">
    <div class="site-nav__inner">
        <div class="site-brand">
            <img src="image1/logo.png" alt="Xcel Hair Salon">
            <div class="site-brand__copy">
                <span class="site-brand__eyebrow">Salon support and inquiries</span>
                <span class="site-brand__name">Xcel Hair Salon</span>
            </div>
        </div>
        <ul class="site-links">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="aboutus.php">Why Xcel</a></li>
            <li><a href="contact_us.php" class="active">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="barber_register.php">Barber Register</a></li>
            <li><a href="cust_register.php">Customer Register</a></li>
            <?php if (isset($_SESSION['a_id'])) { echo '<li><a href="adminpanel.php">Admin Dashboard</a></li>'; } ?>
        </ul>
    </div>
</nav>

<main>
    <section class="section">
        <div class="contact-layout">
            <div class="contact-visual">
                <div class="eyebrow" style="color:#f7d8ba;">Welcome to Xcel</div>
                <h1 style="color:#fff7ef;font-size:clamp(34px,5vw,58px);">Need help or want to learn more?</h1>
                <p style="margin-top:18px;color:rgba(255,245,236,0.82);font-size:18px;max-width:520px;">If you have a question about the platform, reach out and we will get back to you with the right next step.</p>
            </div>
            <div class="surface-card contact-form-card">
                <div class="eyebrow">Send a message</div>
                <h2 class="section-title">We would love to hear from you.</h2>
                <p class="lead" style="margin-bottom:24px;">Your email address will not be published. Required fields are marked.</p>
                <form action="contactuscode.php" method="post" class="form-stack">
                    <div class="field">
                        <label for="name">Name*</label>
                        <input id="name" type="text" name="name" required>
                    </div>
                    <div class="field">
                        <label for="email">Email*</label>
                        <input id="email" type="email" name="email" required>
                    </div>
                    <div class="field">
                        <label for="subject">Subject</label>
                        <input id="subject" type="text" name="subject" required>
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <input type="submit" value="Contact Us">
                </form>
            </div>
        </div>
    </section>
</main>

<footer id="foot">
    <div id="foot1">
        <div id="icon_above">
            <div id="icon_div">
                <div id="about">Visit or contact us</div><br>
                Poornima University<br>
                Vidhani, Jaipur<br><br>
                <span style="color:#f1cfad;font-size:15px;">91*******<br><br>contact@xcelhairsalon.ie</span>
            </div>
            <div id="content">
                <img src="image1/logo.png" alt="Xcel Hair Salon" style="width:84px;height:84px;padding:10px;border-radius:22px;background:rgba(255,255,255,0.08);margin-bottom:18px;">
                Xcel Hair Salon supports businesses that want a more organized appointment journey, better client communication, and a more polished digital front door.
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
