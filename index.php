<?php
$pageTitle = 'Home';
$currentPage = 'home';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container hero-container">
        <div class="hero-content fade-in-up">
            <h1>Creative Digital Solutions for <span class="gradient-text">Modern Brands</span></h1>
            <p>We craft stunning digital experiences that captivate your audience, drive engagement, and transform your business for the digital age.</p>
            <div class="hero-btns">
                <a href="contact.php" class="btn btn-primary">Get Started</a>
                <a href="services.php" class="btn btn-secondary">Our Services</a>
            </div>
        </div>
        <div class="hero-image fade-in-up delay-1">
            <!-- Using a high-quality placeholder image for hero -->
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Digital Agency Dashboard">
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="section-padding bg-light">
    <div class="container text-center fade-in-up">
        <h2 class="section-title">Welcome to Parichiti Studios</h2>
        <p class="section-subtitle">We are a passionate team of digital innovators, designers, and developers dedicated to helping businesses thrive in the competitive digital landscape.</p>
        
        <div class="services-grid">
            <div class="service-card delay-1">
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Web Development</h3>
                <p>Custom, responsive HTML, CSS, JavaScript, and PHP websites built with modern technologies.</p>
            </div>
            
            <div class="service-card delay-2">
                <div class="service-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h3>Digital Marketing</h3>
                <p>Data-driven strategies to increase your online visibility and drive targeted traffic.</p>
            </div>
            
            <div class="service-card delay-3">
                <div class="service-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3>Visual Design</h3>
                <p>Stunning UI/UX designs that enhance user engagement and brand perception.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to action -->
<section class="section-padding bg-gradient">
    <div class="container text-center fade-in-up">
        <h2 style="color: white; font-size: 2.5rem; margin-bottom: 20px;">Ready to Grow Your Business?</h2>
        <p style="color: rgba(255,255,255,0.9); font-size: 1.1rem; max-width: 600px; margin: 0 auto 30px;">Let's collaborate to bring your digital vision to life. Get in touch with us today for a free consultation.</p>
        <a href="contact.php" class="btn btn-secondary" style="padding: 15px 40px; font-size: 1.1rem;">Contact Us Now</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
