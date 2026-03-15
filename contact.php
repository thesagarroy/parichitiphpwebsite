<?php
$pageTitle = 'Contact Us';
$currentPage = 'contact';
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="fade-in-up">Contact Us</h1>
        <p class="fade-in-up delay-1">We'd love to hear from you. Get in touch with us.</p>
    </div>
</section>

<!-- Contact Section -->
<section class="section-padding bg-light">
    <div class="container fade-in-up">
        <div class="contact-container">
            
            <div class="contact-info-wrap">
                <h3>Contact Information</h3>
                <p style="color: rgba(255,255,255,0.8); margin-bottom: 2rem;">Fill up the form and our team will get back to you within 24 hours.</p>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-text">
                        <h4>Phone</h4>
                        <a href="tel:7001044700">7001044700</a>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="info-text">
                        <h4>WhatsApp</h4>
                        <a href="https://wa.me/917001044700" target="_blank">+91 7001044700</a>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-text">
                        <h4>Email</h4>
                        <a href="mailto:hello@parichitistudios.com">hello@parichitistudios.com</a>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-text">
                        <h4>Location</h4>
                        <p>India</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h3 style="font-size: 1.8rem; margin-bottom: 1.5rem;">Send us a message</h3>
                <form id="contactForm" action="#" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                </form>
            </div>
            
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
