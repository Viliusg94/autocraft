<?php
// Main index.php for AutoCraft WordPress theme
get_header();
?>

<main>
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <a href="#contact" class="cta-button">Gauti Pasiūlymą</a>
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Mūsų Paslaugos</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">🔥</div>
                    <h3>1 Etapo poliravimas</h3>
                    <p>Vieno etapo poliravimas – greitas ir efektyvus būdas atnaujinti automobilio blizgesį, pašalinti smulkius įbrėžimus ir suteikti paviršiui gaivų spindesį.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔥</div>
                    <h3>2 Etapų poliravimas</h3>
                    <p>Du poliravimo etapai leidžia pašalinti gilesnius įbrėžimus ir atkurti dažų sluoksnio gylį, užtikrinant ilgalaikį automobilio grožį.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔥</div>
                    <h3>3 Etapų poliravimas</h3>
                    <p>Trys poliravimo etapai – maksimalus rezultatas, kai pašalinami net ir sudėtingiausi defektai, o paviršius tampa nepriekaištingai lygus ir blizgus.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🛠️</div>
                    <h3>Detalės šlifavimas</h3>
                    <p>Detalės šlifavimas – individualių automobilio detalių atnaujinimas, pašalinant pažeidimus ir atkuriant jų išvaizdą.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">⭐</div>
                    <h3>Keraminė danga iki 12mėn</h3>
                    <p>Keraminė danga iki 12 mėn. – trumpalaikė, bet efektyvi apsauga nuo aplinkos poveikio ir lengvesnė automobilio priežiūra.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">⭐</div>
                    <h3>Keraminė danga iki 36mėn</h3>
                    <p>Keraminė danga iki 36 mėn. – ilgalaikė apsauga, kuri išlaiko automobilio blizgesį ir saugo dažus nuo pažeidimų.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">⭐</div>
                    <h3>Nano danga stiklams</h3>
                    <p>Nano danga stiklams – apsaugo stiklus nuo vandens, purvo ir pagerina matomumą bet kokiomis oro sąlygomis.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🧽</div>
                    <h3>Cheminis salono valymas</h3>
                    <p>Cheminis salono valymas – giluminis salono valymas, pašalinantis dėmes, kvapus ir atnaujinantis vidaus apdailą.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🧽</div>
                    <h3>Sausas salono valymas</h3>
                    <p>Sausas salono valymas – greitas ir saugus būdas atnaujinti saloną be papildomos drėgmės.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🧽</div>
                    <h3>Vaikiškos kėdutės valymas</h3>
                    <p>Vaikiškos kėdutės valymas – kruopštus ir saugus valymas, užtikrinantis higieną ir komfortą vaikams.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🧽</div>
                    <h3>Lubų valymas</h3>
                    <p>Lubų valymas – papildoma paslauga, kurios kaina derinama individualiai pagal poreikius.</p>
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
                        $to = 'info@autocraft.lt';
                        $subject = 'Nauja užklausa iš AutoCraft svetainės';
                        $headers = array();
                        $headers[] = 'Content-Type: text/html; charset=UTF-8';
                        $headers[] = 'From: AutoCraft <no-reply@autocraft.local>';
                        $headers[] = 'Reply-To: ' . sanitize_email($_POST['email']);
                        $name = sanitize_text_field($_POST['name']);
                        $email = sanitize_email($_POST['email']);
                        $phone = sanitize_text_field($_POST['phone']);
                        $service = sanitize_text_field($_POST['service']);
                        $parts = isset($_POST['parts']) ? intval($_POST['parts']) : '';
                        $message = nl2br(esc_html($_POST['message']));
                        $body = "<strong>Vardas:</strong> $name<br>"
                              . "<strong>El. paštas:</strong> $email<br>"
                              . "<strong>Telefonas:</strong> $phone<br>"
                              . "<strong>Paslauga:</strong> $service<br>"
                              . "<strong>Žinutė:</strong><br>$message";
                        if ($service === 'Detalės šlifavimas' && $parts) {
                            $body = "<strong>Paslauga:</strong> $service<br><strong>Detalių kiekis:</strong> $parts<br>" . $body;
                        } else {
                            $body = "<strong>Paslauga:</strong> $service<br>" . $body;
                        }
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
                            <label for="service">Paslauga *</label>
                            <select id="service" name="service" required onchange="togglePartsField(this.value)">
                                <option value="">-- Pasirinkite paslaugą --</option>
                                <option value="1 Etapo poliravimas">🔥 1 Etapo poliravimas</option>
                                <option value="2 Etapų poliravimas">🔥 2 Etapų poliravimas</option>
                                <option value="3 Etapų poliravimas">🔥 3 Etapų poliravimas</option>
                                <option value="Detalės šlifavimas">Detalės šlifavimas</option>
                                <option value="Keraminė danga iki 12mėn">⭐ Keraminė danga iki 12mėn</option>
                                <option value="Keraminė danga iki 36mėn">⭐ Keraminė danga iki 36mėn</option>
                                <option value="Nano danga stiklams">⭐ Nano danga stiklams</option>
                                <option value="Cheminis salono valymas">🧽 Cheminis salono valymas</option>
                                <option value="Sausas salono valymas">🧽 Sausas salono valymas</option>
                                <option value="Vaikiškos kėdutės valymas">🧽 Vaikiškos kėdutės valymas</option>
                                <option value="Lubų valymas">🧽 Lubų valymas</option>
                                <option value="Kita">Kita</option>
                            </select>
                        </div>
                        <div class="form-group" id="partsField" style="display:none;">
                            <label for="parts">Detalių kiekis</label>
                            <input type="number" id="parts" name="parts" min="1" placeholder="Įveskite detalių kiekį">
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

    <!-- Google Reviews Section -->
    <section class="google-reviews-section" style="background:#181c22;padding:48px 0 32px 0;margin:0;">
        <div class="container" style="max-width:900px;margin:0 auto;text-align:center;">
            <h2 class="section-title" style="margin-bottom:28px;">Klientų atsiliepimai</h2>
            <!-- Google Reviews Widget START -->
            <div id="google-reviews-widget" style="display:flex;justify-content:center;align-items:center;">
                <?php // Replace the shortcode below with the one provided by your Google reviews plugin (e.g., Trustindex, RichPlugins, etc.)
                echo do_shortcode('[trustindex no-registration=google]');
                ?>
            </div>
            <div style="margin-top:18px;">
                <a href="https://search.google.com/local/reviews?placeid=ChIJvwHEN0Tj5UYRkt2J9gCsLTA" target="_blank" rel="noopener" style="color:#ffb347;font-weight:600;text-decoration:underline;">Peržiūrėti daugiau atsiliepimų Google</a>
            </div>
        </div>
    </section>
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

function togglePartsField(val) {
    var pf = document.getElementById('partsField');
    if(val === 'Detalės šlifavimas') {
        pf.style.display = 'block';
        document.getElementById('parts').required = true;
    } else {
        pf.style.display = 'none';
        document.getElementById('parts').required = false;
    }
}
window.addEventListener('DOMContentLoaded', function() {
    var sel = document.getElementById('service');
    if(sel) togglePartsField(sel.value);
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
