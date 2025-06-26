<?php
/*
Template Name: Gallery
*/

get_header(); ?>

<main>
    <section class="gallery-page">
        <div class="container">
            <h2 class="section-title">Galerija</h2>
            <div class="gallery-grid">
                <?php
                $gallery_images = glob(get_template_directory() . '/images/100001*.jpg');
                foreach ($gallery_images as $img) {
                    $img_url = get_template_directory_uri() . '/images/' . basename($img);
                    echo '<div class="gallery-item">';
                    echo '<a href="' . esc_url($img_url) . '" target="_blank"><img src="' . esc_url($img_url) . '" alt="Galerijos nuotrauka"></a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>