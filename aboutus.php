<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Why Xcel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="image1/logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="ui-system.css" type="text/css">
<style>
.about-hero-card,
.contact-strip {
    padding: 32px;
}

.about-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

.about-hero-image {
    min-height: 520px;
    border-radius: 36px;
    background:
        linear-gradient(180deg, rgba(24, 15, 11, 0.24), rgba(24, 15, 11, 0.48)),
        url("image1/51.jpg") center/cover no-repeat;
    box-shadow: var(--shadow-soft);
}
</style>
</head>
<body>
<nav class="site-nav">
    <div class="site-nav__inner">
        <div class="site-brand">
            <img src="image1/logo.png" alt="Xcel Hair Salon">
            <div class="site-brand__copy">
                <span class="site-brand__eyebrow">Designed for growing salons</span>
                <span class="site-brand__name">Xcel Hair Salon</span>
            </div>
        </div>
        <ul class="site-links">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="aboutus.php" class="active">Why Xcel</a></li>
            <li><a href="contact_us.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="barber_register.php">Barber Register</a></li>
            <li><a href="cust_register.php">Customer Register</a></li>
            <?php if (isset($_SESSION['a_id'])) { echo '<li><a href="adminpanel.php">Admin Dashboard</a></li>'; } ?>
        </ul>
    </div>
</nav>

<main>
    <section class="hero">
        <div class="hero__content about-hero-card surface-card">
            <div class="eyebrow">Why Xcel</div>
            <h1 class="section-title">Software that adapts to the way your salon already works.</h1>
            <p class="lead">The right booking software should not force salons into awkward routines. Xcel supports the daily rhythm of admins, barbers, and customers with a booking experience that feels lighter, faster, and more trustworthy.</p>
            <div class="about-grid">
                <div class="info-card">
                    <h3>Less waiting friction</h3>
                    <p>Customers can see services and time slots instead of guessing how long queues will be.</p>
                </div>
                <div class="info-card">
                    <h3>More control</h3>
                    <p>Barbers manage their service catalog and slot availability in a focused workflow.</p>
                </div>
                <div class="info-card">
                    <h3>Stronger operations</h3>
                    <p>Admins keep visibility across customers, staff, contact inquiries, and complaints.</p>
                </div>
                <div class="info-card">
                    <h3>Professional feel</h3>
                    <p>From booking to follow-up, the system gives the business a more premium presentation.</p>
                </div>
            </div>
        </div>
        <div class="about-hero-image"></div>
    </section>

    <section class="section">
        <div class="section-heading">
            <div class="eyebrow">What makes it useful</div>
            <h2 class="section-title">A practical CRM for appointment-led service businesses.</h2>
            <p class="lead">Xcel Hair Salon helps a salon register its business details, define available services, publish appointment slots, and let customers book with much less uncertainty. The goal is simple: fewer queues, cleaner communication, and a smoother business day.</p>
        </div>
        <div class="quick-actions">
            <div class="quick-card">
                <h3 class="quick-card__title">Transparent service catalog</h3>
                <p class="quick-card__meta">Customers understand pricing and categories before they book.</p>
            </div>
            <div class="quick-card">
                <h3 class="quick-card__title">Role-based dashboards</h3>
                <p class="quick-card__meta">Each user type sees the tools they actually need.</p>
            </div>
            <div class="quick-card">
                <h3 class="quick-card__title">Feedback visibility</h3>
                <p class="quick-card__meta">Complaints and contact requests are easier for admins to resolve.</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="surface-card contact-strip">
            <div class="eyebrow">Talk to us</div>
            <h2 class="section-title">Ready to streamline your salon experience?</h2>
            <p class="lead">Call <strong>0899 283 283</strong> or email <strong>contact@xcelhairsalon.in</strong> to learn more about the platform.</p>
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
                Xcel gives salons a more reliable and polished way to manage services, appointment slots, and business communication without changing the heart of how they operate.
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
