<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="container">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="AutoCraft Logo"> 
            </a>
            <button class="nav-toggle" aria-label="Toggle navigation">
                <span class="hamburger-icon">☰</span>
            </button>
            <ul class="nav-links">
                <li><a href="<?php echo home_url(); ?>#home">Pradžia</a></li>
                <li><a href="<?php echo site_url('/paslaugos'); ?>">Paslaugos</a></li>
                <li><a href="<?php echo site_url('/galerija'); ?>">Galerija</a></li>
                <li><a href="<?php echo site_url('/kontaktai'); ?>">Kontaktai</a></li>
            </ul>
        </nav>
    </header>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Responsive nav toggle with hamburger to X transformation
        const navToggle = document.querySelector('.nav-toggle');
        const navLinks = document.querySelector('.nav-links');
        const hamburgerIcon = document.querySelector('.hamburger-icon');
        
        if (navToggle && navLinks && hamburgerIcon) {
            navToggle.addEventListener('click', function() {
                const isActive = navLinks.classList.contains('active');
                
                navLinks.classList.toggle('active');
                navToggle.classList.toggle('active');
                
                // Transform hamburger to X and vice versa
                if (isActive) {
                    hamburgerIcon.textContent = '☰'; // Back to hamburger
                } else {
                    hamburgerIcon.textContent = '✕'; // Change to X
                }
            });
            
            // Close menu when clicking on a link (for mobile)
            const menuLinks = navLinks.querySelectorAll('a');
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navLinks.classList.remove('active');
                    navToggle.classList.remove('active');
                    hamburgerIcon.textContent = '☰'; // Reset to hamburger
                });
            });
        }

        // Carousel logic
        const track = document.querySelector('.carousel-track');
        if (track) {
            const images = Array.from(track.querySelectorAll('.carousel-img'));
            let current = 0;
            function show(idx) {
                images.forEach((img, i) => {
                    img.style.display = (i === idx) ? 'block' : 'none';
                });
            }
            show(current);
            const prevBtn = document.querySelector('.carousel-btn.prev');
            const nextBtn = document.querySelector('.carousel-btn.next');
            prevBtn.addEventListener('click', function() {
                current = (current - 1 + images.length) % images.length;
                show(current);
            });
            nextBtn.addEventListener('click', function() {
                current = (current + 1) % images.length;
                show(current);
            });
        }
    });
    </script>