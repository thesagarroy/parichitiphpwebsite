<?php
$pageTitle = 'Home';
$currentPage = 'home';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container hero-container">
        <div class="hero-content fade-in-up">
            <h1>Custom Built Websites by <span class="gradient-text">Expert Developers</span></h1>
            <p>We write clean, optimized code to build stunning digital experiences from scratch. Maximize your online potential with a true technical partner.</p>
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

<!-- Stats / Trust Section -->
<section class="padding-y-sm bg-white" style="padding: 40px 0; border-bottom: 1px solid #e5e7eb;">
    <div class="container">
        <div class="stats-grid" style="display: flex; justify-content: space-around; flex-wrap: wrap; text-align: center; gap: 2rem;">
            <div class="stat-item fade-in-up">
                <h3 style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 5px;">100%</h3>
                <p style="color: var(--text-muted); font-weight: 600;">Original Code</p>
            </div>
            <div class="stat-item fade-in-up delay-1">
                <h3 style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 5px;">50+</h3>
                <p style="color: var(--text-muted); font-weight: 600;">Projects Delivered</p>
            </div>
            <div class="stat-item fade-in-up delay-2">
                <h3 style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 5px;">24/7</h3>
                <p style="color: var(--text-muted); font-weight: 600;">Developer Support</p>
            </div>
            <div class="stat-item fade-in-up delay-3">
                <h3 style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 5px;">5 <i class="fas fa-star" style="font-size:1.5rem; color:#F59E0B;"></i></h3>
                <p style="color: var(--text-muted); font-weight: 600;">Client Rating</p>
            </div>
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

<!-- Tech Stack Section -->
<section class="section-padding bg-white">
    <div class="container text-center fade-in-up">
        <h2 class="section-title">Technologies We Master</h2>
        <p class="section-subtitle">We build robust and scalable websites using industry-standard tools and frameworks as true developers.</p>
        
        <div class="tech-stack-container" style="display: flex; justify-content: center; gap: 3rem; flex-wrap: wrap; margin-top: 3rem;">
            <div class="tech-item" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <i class="fab fa-html5" style="font-size: 4rem; color: #E34F26;"></i>
                <p style="margin-top: 10px; font-weight: 600;">HTML5</p>
            </div>
            <div class="tech-item" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <i class="fab fa-css3-alt" style="font-size: 4rem; color: #1572B6;"></i>
                <p style="margin-top: 10px; font-weight: 600;">CSS3</p>
            </div>
            <div class="tech-item" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <i class="fab fa-js" style="font-size: 4rem; color: #F7DF1E;"></i>
                <p style="margin-top: 10px; font-weight: 600;">JavaScript</p>
            </div>
            <div class="tech-item" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <i class="fab fa-php" style="font-size: 4rem; color: #777BB4;"></i>
                <p style="margin-top: 10px; font-weight: 600;">PHP</p>
            </div>
            <div class="tech-item" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <i class="fas fa-database" style="font-size: 4rem; color: #336791;"></i>
                <p style="margin-top: 10px; font-weight: 600;">MySQL</p>
            </div>
            <div class="tech-item" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <i class="fab fa-wordpress" style="font-size: 4rem; color: #21759B;"></i>
                <p style="margin-top: 10px; font-weight: 600;">WordPress</p>
            </div>
            <div class="tech-item" style="transition: transform 0.3s ease; cursor: pointer;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                <i class="fab fa-react" style="font-size: 4rem; color: #61DAFB;"></i>
                <p style="margin-top: 10px; font-weight: 600;">React</p>
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
