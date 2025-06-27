<?php
// Main index.php for AutoCraft WordPress theme
get_header();
?>

<main>
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1><?php bloginfo('name'); ?></h1>
                <p><?php bloginfo('description'); ?></p>
                <a href="#contact" class="cta-button">Gauti Pasiūlymą</a>
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Mūsų Paslaugos</h2>
            <div class="services-grid">
                <!-- Example service cards, replace with dynamic content if needed -->
                <div class="service-card">
                    <div class="service-icon">✨</div>
                    <h3>Dažų Korekcija</h3>
                    <p>Profesionali dažų korekcija, pašalinanti įbrėžimus ir atkuriantį originalų automobilio blizgesį.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🛡️</div>
                    <h3>Keramikos Danga</h3>
                    <p>Ilgalaikė apsauga su aukščiausios kokybės keramikos danga, suteikiančia puikų blizgesį ir atsparumą.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🧽</div>
                    <h3>Salono Detailing</h3>
                    <p>Visiškas salono valymas ir kondicionavimas odai, audiniams ir visoms salono paviršiams.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">💎</div>
                    <h3>Aukščiausios Kokybės Poliravimas</h3>
                    <p>Daugiapakopis poliravimo procesas naudojant profesionalius įrankius ir priemones.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🚗</div>
                    <h3>Visiškas Detailing</h3>
                    <p>Pilnas išorės ir salono detailing paketas aukščiausiai automobilių priežiūros kokybei.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🧴</div>
                    <h3>Vaškas ir Apsauga</h3>
                    <p>Aukštos kokybės vaško taikymas ir apsauginiai apdorojimai automobilių išvaizdai išlaikyti.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Apie AutoCraft</h2>
                    <p>Turėdami metų patirtį automobilių detailing srityje, AutoCraft Šiauliai teikia išskirtinius automobilio poliravimo ir detailing paslaugas. Naudojame tik aukščiausios kokybės produktus ir profesionalius metodus, kad jūsų automobilis atrodytų puikiai.</p>
                    <p>Mūsų aistra tobulybei ir dėmesys detalėms mus išskiria iš kitų. Nesvarbu, ar jums reikia dažų korekcijos, keramikos dangos ar visiško detailing, mes kiekvieną automobilį traktuojame su rūpestingu ir tikslumu, kurio jis nusipelno.</p>
                    <p>Įsikūrę Šiauliuose, aptarnaujame klientus visame regione tiek mūsų dirbtuvėse, tiek mobiliomis paslaugomis.</p>
                </div>
                <div class="about-carousel">
                    <div class="carousel-wrapper">
                        <div class="carousel-track">
                            <?php
                            $carousel_images = glob(get_template_directory() . '/images/100001*.jpg');
                            foreach ($carousel_images as $idx => $img) {
                                $img_url = get_template_directory_uri() . '/images/' . basename($img);
                                echo '<img src="' . esc_url($img_url) . '" alt="AutoCraft work ' . ($idx+1) . '" class="carousel-img" style="display:' . ($idx === 0 ? 'block' : 'none') . ';" />';
                            }
                            ?>
                        </div>
                        <button class="carousel-btn prev">&#10094;</button>
                        <button class="carousel-btn next">&#10095;</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Susisiekite su Mumis</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Kaip su Mumis Susisiekti</h3>
                    <div class="contact-item">
                        <i>📍</i>
                        <div>
                            <strong>Adresas:</strong><br>
                            Užmiesčio g. 13, Šiauliai, Lithuania, 76273
                        </div>
                    </div>
                    <div class="contact-item">
                        <i>📞</i>
                        <div>
                            <strong>Telefonas:</strong><br>
                            +370 XXX XXXXX
                        </div>
                    </div>
                    <div class="contact-item">
                        <i>✉️</i>
                        <div>
                            <strong>El. paštas:</strong><br>
                            info@autocraft.lt
                        </div>
                    </div>
                    <div class="contact-item">
                        <i>🕒</i>
                        <div>
                            <strong>Darbo laikas:</strong><br>
                            Pr-Pn: 9:00 - 18:00<br>
                            Št: 9:00 - 16:00<br>
                            Sk: Nedirbame
                        </div>
                    </div>
                    <div class="contact-map" style="margin-top:24px; border-radius:12px; overflow:hidden; box-shadow:0 2px 12px #0007;">
                        <iframe
                            src="https://www.google.com/maps?q=Užmiesčio+g.+13,+Šiauliai,+Lithuania,+76273&output=embed"
                            width="100%" height="220" style="border:0; border-radius:12px; min-width:220px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Užsakyti Pasiūlymą</h3>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'])) {
                        $to = 'Viliusg94@gmail.com';
                        $subject = 'Nauja užklausa iš AutoCraft svetainės';
                        $headers = array();
                        $headers[] = 'Content-Type: text/html; charset=UTF-8';
                        $headers[] = 'From: AutoCraft <no-reply@autocraft.local>';
                        $headers[] = 'Reply-To: ' . sanitize_email($_POST['email']);
                        $name = sanitize_text_field($_POST['name']);
                        $email = sanitize_email($_POST['email']);
                        $phone = sanitize_text_field($_POST['phone']);
                        $service = sanitize_text_field($_POST['service']);
                        $message = nl2br(esc_html($_POST['message']));
                        $body = "<strong>Vardas:</strong> $name<br>"
                              . "<strong>El. paštas:</strong> $email<br>"
                              . "<strong>Telefonas:</strong> $phone<br>"
                              . "<strong>Paslauga:</strong> $service<br>"
                              . "<strong>Žinutė:</strong><br>$message";
                        $mail_sent = wp_mail($to, $subject, $body, $headers);
                        if ($mail_sent) {
                            echo '<script>alert("Jūsų užklausa išsiųsta sėkmingai!");</script>';
                        } else {
                            echo '<script>alert("Nepavyko išsiųsti užklausos. Bandykite dar kartą vėliau.");</script>';
                        }
                    }
                    ?>
                    <form id="contactForm" method="post">
                        <div class="form-group">
                            <label for="name">Vardas *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">El. paštas *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefonas</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="service">Reikalinga Paslauga</label>
                            <select id="service" name="service">
                                <option value="">Pasirinkite paslaugą</option>
                                <option value="paint-correction">Dažų Korekcija</option>
                                <option value="ceramic-coating">Keramikos Danga</option>
                                <option value="interior-detailing">Salono Detailing</option>
                                <option value="premium-polishing">Aukščiausios Kokybės Poliravimas</option>
                                <option value="full-detailing">Visiškas Detailing</option>
                                <option value="wax-protection">Vaškas ir Apsauga</option>
                                <option value="other">Kita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Žinutė</label>
                            <textarea id="message" name="message" rows="4" placeholder="Papasakokite apie savo automobilį ir ko jums reikia..."></textarea>
                        </div>
                        <button type="submit" class="submit-button">Siųsti Užklausą</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Carousel Modal -->
    <div id="carouselModal" class="carousel-modal" style="display:none;">
      <span class="carousel-modal-close">&times;</span>
      <img class="carousel-modal-img" src="" alt="Big preview" />
      <button class="carousel-modal-btn prev">&#10094;</button>
      <button class="carousel-modal-btn next">&#10095;</button>
    </div>
</main>

<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.about-carousel .carousel-track');
    const images = Array.from(track.querySelectorAll('img'));
    const prevBtn = document.querySelector('.about-carousel .carousel-btn.prev');
    const nextBtn = document.querySelector('.about-carousel .carousel-btn.next');
    let current = 0;
    if (images.length > 0) {
        images[0].style.display = 'block';
    }
    function showImage(idx) {
        images.forEach((img, i) => img.style.display = i === idx ? 'block' : 'none');
    }
    prevBtn.addEventListener('click', function() {
        current = (current - 1 + images.length) % images.length;
        showImage(current);
    });
    nextBtn.addEventListener('click', function() {
        current = (current + 1) % images.length;
        showImage(current);
    });

    // Modal logic
    const modal = document.getElementById('carouselModal');
    const modalImg = modal.querySelector('.carousel-modal-img');
    const modalClose = modal.querySelector('.carousel-modal-close');
    const modalPrev = modal.querySelector('.carousel-modal-btn.prev');
    const modalNext = modal.querySelector('.carousel-modal-btn.next');
    let modalCurrent = 0;
    images.forEach((img, i) => {
        img.style.cursor = 'pointer';
        img.addEventListener('click', function() {
            modal.style.display = 'flex';
            modalImg.src = img.src;
            modalCurrent = i;
        });
    });
    function showModalImg(idx) {
        modalImg.src = images[idx].src;
    }
    modalPrev.addEventListener('click', function(e) {
        e.stopPropagation();
        modalCurrent = (modalCurrent - 1 + images.length) % images.length;
        showModalImg(modalCurrent);
    });
    modalNext.addEventListener('click', function(e) {
        e.stopPropagation();
        modalCurrent = (modalCurrent + 1) % images.length;
        showModalImg(modalCurrent);
    });
    modalClose.addEventListener('click', function() {
        modal.style.display = 'none';
    });
    modal.addEventListener('click', function(e) {
        if (e.target === modal) modal.style.display = 'none';
    });
    document.addEventListener('keydown', function(e) {
        if (modal.style.display === 'flex') {
            if (e.key === 'ArrowLeft') modalPrev.click();
            if (e.key === 'ArrowRight') modalNext.click();
            if (e.key === 'Escape') modalClose.click();
        }
    });
});
</script>

<style>
.carousel-modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000;
}
.carousel-modal-close {
  position: absolute;
  top: 20px;
  right: 30px;
  color: white;
  font-size: 28px;
  cursor: pointer;
}
.carousel-modal-img {
  max-width: 90%;
  max-height: 80%;
  border-radius: 8px;
}
.carousel-modal-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(255, 255, 255, 0.8);
  border: none;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  cursor: pointer;
  font-size: 18px;
  color: #333;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
.carousel-modal-btn.prev {
  left: 10px;
}
.carousel-modal-btn.next {
  right: 10px;
}
</style>
