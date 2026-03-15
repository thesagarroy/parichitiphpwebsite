<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Parichiti Studios' : 'Parichiti Studios – Creative Digital Solutions'; ?></title>
    <meta name="description" content="Parichiti Studios is a digital agency providing Website Development and Digital Marketing services.">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container top-bar-container">
            <div class="top-bar-contact">
                <a href="mailto:hello@parichitistudios.com"><i class="fas fa-envelope"></i> hello@parichitistudios.com</a>
                <a href="tel:7001044700"><i class="fas fa-phone-alt"></i> +91 7001044700</a>
            </div>
            <div class="top-bar-action">
                <a href="https://wa.me/917001044700" target="_blank" class="whatsapp-header-btn"><i class="fab fa-whatsapp"></i> WhatsApp Us</a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container nav-container">
            <a href="index.php" class="logo">
                <span class="logo-text">Parichiti <span class="highlight">Studios</span></span>
            </a>
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-menu">
                <li><a href="index.php" class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Home</a></li>
                <li><a href="services.php" class="<?php echo ($currentPage == 'services') ? 'active' : ''; ?>">Services</a></li>
                <li><a href="about.php" class="<?php echo ($currentPage == 'about') ? 'active' : ''; ?>">About Us</a></li>
                <li><a href="contact.php" class="<?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">Contact</a></li>
                <li><a href="contact.php" class="btn btn-primary nav-btn">Get Started</a></li>
            </ul>
        </div>
    </nav>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/917001044700" target="_blank" class="whatsapp-float" aria-label="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    
    <!-- Main Content Start -->
    <main>
