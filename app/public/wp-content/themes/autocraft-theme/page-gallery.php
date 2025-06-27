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
                // Get all images from the theme's images folder used in the carousel
                $gallery_images = glob(get_template_directory() . '/images/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
                $exclude = ['logo.png', 'logo.jpg', 'table.jpg'];
                foreach ($gallery_images as $idx => $img) {
                    $basename = basename($img);
                    if (in_array($basename, $exclude)) continue;
                    $img_url = get_template_directory_uri() . '/images/' . $basename;
                    echo '<div class="gallery-item">';
                    echo '<img src="' . esc_url($img_url) . '" alt="Galerijos nuotrauka" class="gallery-img" data-idx="' . $idx . '" style="cursor:zoom-in;transition:transform 0.2s;">';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>
    <div id="galleryModal" class="gallery-modal" style="display:none;position:fixed;top:0;left:0;width:100vw;height:100vh;background:rgba(10,10,10,0.95);z-index:9999;align-items:center;justify-content:center;">
        <span class="gallery-modal-close" style="position:absolute;top:20px;right:30px;font-size:2rem;cursor:pointer;color:#ffb347;z-index:10;">&times;</span>
        <img class="gallery-modal-img" src="" alt="Big preview" style="max-width:90vw;max-height:80vh;display:block;margin:auto;border-radius:12px;box-shadow:0 8px 32px #000a;transition:transform 0.2s;">
        <button class="gallery-modal-btn prev" style="position:absolute;top:50%;left:30px;transform:translateY(-50%);font-size:2rem;background:none;border:none;color:#ffb347;cursor:pointer;z-index:10;">&#10094;</button>
        <button class="gallery-modal-btn next" style="position:absolute;top:50%;right:30px;transform:translateY(-50%);font-size:2rem;background:none;border:none;color:#ffb347;cursor:pointer;z-index:10;">&#10095;</button>
    </div>
</main>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const images = Array.from(document.querySelectorAll('.gallery-img'));
    const modal = document.getElementById('galleryModal');
    const modalImg = modal.querySelector('.gallery-modal-img');
    const closeBtn = modal.querySelector('.gallery-modal-close');
    const prevBtn = modal.querySelector('.gallery-modal-btn.prev');
    const nextBtn = modal.querySelector('.gallery-modal-btn.next');
    let currentIdx = 0;
    function showModal(idx) {
        currentIdx = idx;
        modalImg.src = images[idx].src;
        modal.style.display = 'flex';
        setTimeout(() => { modalImg.style.transform = 'scale(1.08)'; }, 10);
    }
    images.forEach((img, idx) => {
        img.addEventListener('click', () => showModal(idx));
    });
    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
        modalImg.src = '';
        modalImg.style.transform = 'scale(1)';
    });
    prevBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        currentIdx = (currentIdx - 1 + images.length) % images.length;
        modalImg.style.transform = 'scale(1)';
        setTimeout(() => {
            modalImg.src = images[currentIdx].src;
            modalImg.style.transform = 'scale(1.08)';
        }, 100);
    });
    nextBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        currentIdx = (currentIdx + 1) % images.length;
        modalImg.style.transform = 'scale(1)';
        setTimeout(() => {
            modalImg.src = images[currentIdx].src;
            modalImg.style.transform = 'scale(1.08)';
        }, 100);
    });
    // Close modal on outside click
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
            modalImg.src = '';
            modalImg.style.transform = 'scale(1)';
        }
    });
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (modal.style.display === 'flex') {
            if (e.key === 'ArrowLeft') prevBtn.click();
            if (e.key === 'ArrowRight') nextBtn.click();
            if (e.key === 'Escape') closeBtn.click();
        }
    });
});
</script>
<?php get_footer(); ?>