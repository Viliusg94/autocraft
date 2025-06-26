<div class="footer">
    <div class="container">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="AutoCraft Logo">
            <span>AutoCraft</span>
        </div>
        <ul class="footer-links">
            <li><a href="#home">Pradžia</a></li>
            <li><a href="#services">Paslaugos</a></li>
            <li><a href="#about">Apie mus</a></li>
            <li><a href="#contact">Kontaktai</a></li>
            <li><a href="<?php echo home_url('/gallery'); ?>">Galerija</a></li>
        </ul>
        <div class="footer-bottom">
            &copy; <?php echo date("Y"); ?> AutoCraft. Visos teisės saugomos.
        </div>
    </div>
    <?php wp_footer(); ?>
</div>
</body>
</html>