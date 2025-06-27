<?php
/*
Template Name: Kontaktai
*/

get_header(); ?>
<main>
    <section class="contact-page" style="background: linear-gradient(135deg, #181c22 60%, #23272f 100%) !important; color: var(--main-text) !important; border-radius: 18px; box-shadow: none; margin: 32px 0; padding: 60px 0; border: 1.5px solid var(--main-accent);">
        <div class="container">
            <h2 class="section-title">Kontaktai</h2>
            <div class="contact-content" style="display:flex;flex-wrap:wrap;gap:40px;align-items:flex-start;justify-content:flex-start;">
                <div style="display:flex;flex-direction:column;gap:32px;flex:1 1 340px;min-width:320px;max-width:520px;">
                    <div class="contact-info" style="background:#181c22 !important;border-radius:18px;box-shadow:none;border:1.5px solid #23272f;color:var(--main-text);padding:32px 24px;">
                        <p><strong>Adresas:</strong> Užmiesčio g. 13, Šiauliai, Lietuva</p>
                        <p><strong>Telefonas:</strong> <a href="tel:+37066848977" style="color:#ffb347;">+370 668 48977</a></p>
                        <p><strong>El. paštas:</strong> <a href="mailto:info@autocraft.lt" style="color:#ffb347;">info@autocraft.lt</a></p>
                    </div>
                    <div class="contact-map" style="background:#181c22 !important;border-radius:18px;box-shadow:0 2px 16px #000a;border:1.5px solid #23272f;padding:0;display:flex;align-items:center;justify-content:center;">
                        <iframe src="https://www.google.com/maps?q=Užmiesčio+g.+13,+Šiauliai,+Lithuania,+76273&output=embed" width="100%" height="320" style="border:0; border-radius:12px; min-width:220px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="contact-form" style="flex:1 1 320px;min-width:320px;max-width:420px;background:#181c22 !important;border-radius:18px;box-shadow:0 2px 16px #000a;border:1.5px solid var(--main-accent);color:#e0e0e0;padding:32px 24px;display:flex;flex-direction:column;align-items:center;margin-left:auto;">
                    <h3>Susisiekite su mumis</h3>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'])) {
                        $to = 'viliusg94@gmail.com';
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
                    <form id="contactForm" method="post" style="width:100%;max-width:400px;margin:0 auto;display:flex;flex-direction:column;align-items:center;">
                        <div class="form-group" style="width:100%;">
                            <label for="name">Vardas *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group" style="width:100%;">
                            <label for="email">El. paštas *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group" style="width:100%;">
                            <label for="phone">Telefonas</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group" style="width:100%;">
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
                        <div class="form-group" style="width:100%;">
                            <label for="message">Žinutė</label>
                            <textarea id="message" name="message" rows="4" placeholder="Jūsų žinutė..."></textarea>
                        </div>
                        <button type="submit" class="submit-button">Siųsti užklausą</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
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
// On page load, ensure correct state if browser autofills
window.addEventListener('DOMContentLoaded', function() {
    var sel = document.getElementById('service');
    if(sel) togglePartsField(sel.value);
});
</script>
<?php get_footer(); ?>
