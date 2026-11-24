<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Xcel Hair Salon</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="image1/logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="ui-system.css" type="text/css">
<style>
body {
    background:
        radial-gradient(circle at top right, rgba(215, 178, 138, 0.3), transparent 22%),
        linear-gradient(180deg, #fbf7f1 0%, #f5ede3 100%);
}

.home-hero-visual {
    min-height: 560px;
    border-radius: 36px;
    background:
        linear-gradient(180deg, rgba(22, 14, 10, 0.22), rgba(22, 14, 10, 0.48)),
        url("image1/bg2.jpg") center/cover no-repeat;
    box-shadow: var(--shadow-soft);
}

.home-feature {
    min-height: 240px;
}

.home-story {
    display: grid;
    grid-template-columns: minmax(0, 0.95fr) minmax(300px, 0.75fr);
    gap: 24px;
}

.home-story__panel {
    padding: 32px;
}

.home-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 10px 16px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.7);
    color: var(--primary);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.16em;
    text-transform: uppercase;
}

@media (max-width: 960px) {
    .home-story {
        grid-template-columns: 1fr;
    }
}
</style>
</head>
<body>
<nav class="site-nav">
    <div class="site-nav__inner">
        <div class="site-brand">
            <img src="image1/logo.png" alt="Xcel Hair Salon">
            <div class="site-brand__copy">
                <span class="site-brand__eyebrow">Premium booking experience</span>
                <span class="site-brand__name">Xcel Hair Salon</span>
            </div>
        </div>
        <ul class="site-links">
            <li><a href="homepage.php" class="active">Home</a></li>
            <li><a href="aboutus.php">Why Xcel</a></li>
            <li><a href="contact_us.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="barber_register.php">Apply as Barber</a></li>
            <li><a href="cust_register.php">Register</a></li>
            <?php if (isset($_SESSION['a_id'])) { echo '<li><a href="adminpanel.php">Dashboard</a></li>'; } ?>
        </ul>
    </div>
</nav>

<main>
    <section class="hero">
        <div class="hero__content">
            <span class="home-badge"><i class="fas fa-spa"></i> Modern salon operations</span>
            <div>
                <div class="eyebrow">Built for salons that value polish</div>
                <h1 class="display-title">Confident bookings, polished service, zero queue chaos.</h1>
                <p class="lead">Xcel brings bookings, barber availability, and customer updates into one clean flow so your salon feels premium before the appointment even begins.</p>
            </div>
            <div class="hero__actions">
                <a href="cust_register.php" class="site-button">Book as Customer</a>
                <a href="barber_register.php" class="site-button site-button--secondary">Join as Barber</a>
            </div>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-card__value">24/7</div>
                    <p class="meta">Self-serve appointment scheduling for customers.</p>
                </div>
                <div class="stat-card">
                    <div class="stat-card__value">3 roles</div>
                    <p class="meta">Admin, barber, and customer experiences designed to fit together.</p>
                </div>
                <div class="stat-card">
                    <div class="stat-card__value">1 flow</div>
                    <p class="meta">Services, slots, and bookings tracked in one place.</p>
                </div>
            </div>
        </div>
        <div class="hero__panel">
            <div class="home-hero-visual"></div>
            <div class="hero-note">Reduce wait-time uncertainty with visible services, live time slots, and a faster front-desk experience.</div>
        </div>
    </section>

    <section class="section">
        <div class="section-heading">
            <div class="eyebrow">Quick access</div>
            <h2 class="section-title">Choose the experience that fits your role.</h2>
            <p class="lead">The whole product is organized around focused paths so customers can book quickly, barbers can manage availability, and admins can oversee the business.</p>
        </div>
        <div class="quick-actions">
            <a href="login.php" class="quick-card home-feature">
                <h3 class="quick-card__title">Customer Login</h3>
                <p class="quick-card__meta">Browse barbers, select services, and check booking progress.</p>
            </a>
            <a href="login.php" class="quick-card home-feature">
                <h3 class="quick-card__title">Barber Login</h3>
                <p class="quick-card__meta">Manage service pricing, available slots, and incoming appointments.</p>
            </a>
            <a href="login.php" class="quick-card home-feature">
                <h3 class="quick-card__title">Admin Login</h3>
                <p class="quick-card__meta">Oversee staff, customers, contact requests, complaints, and platform setup.</p>
            </a>
        </div>
    </section>

    <section class="section">
        <div class="home-story">
            <div class="surface-card home-story__panel">
                <div class="eyebrow">Why salons choose Xcel</div>
                <h2 class="section-title">A cleaner customer journey from discovery to chair.</h2>
                <p class="lead">Xcel Hair Salon is a salon CRM and appointment platform built to remove the friction clients feel when they cannot tell when they will be seen. Instead of queues and guesswork, the system turns services and time slots into a guided booking journey.</p>
            </div>
            <div class="feature-grid">
                <div class="info-card">
                    <h3>Service visibility</h3>
                    <p>Customers can review barber services and prices before they commit.</p>
                </div>
                <div class="info-card">
                    <h3>Time-slot clarity</h3>
                    <p>Barbers publish availability so appointments feel predictable and professional.</p>
                </div>
                <div class="info-card">
                    <h3>Business control</h3>
                    <p>Admins manage the entire operation without leaving the platform.</p>
                </div>
                <div class="info-card">
                    <h3>Stronger trust</h3>
                    <p>Clear communication and complaint tracking help customer confidence stay high.</p>
                </div>
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
                Xcel Hair Salon helps businesses grow with a more organized customer and barber workflow. Customers can discover services, compare options, and book time slots without waiting in uncertain queues, while salons keep their daily operations structured and easy to manage.
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
