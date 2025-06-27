<?php
/*
Template Name: Paslaugos
*/

get_header(); ?>

<main>
    <section class="services-page" style="position:relative;min-height:100vh;">
        <div class="container" style="position:relative;z-index:1;">
            <h2 class="section-title">Aukščiausia kokybė jūsų automobiliui!</h2>
            <div style="text-align:center;margin:32px 0 24px 0;">
                <a href="https://search.google.com/local/writereview?placeid=ChIJvwHEN0Tj5UYRkt2J9gCsLTA" target="_blank" rel="noopener" class="google-review-btn" style="background:#ffb347;color:#222;padding:12px 24px;border-radius:8px;font-weight:600;text-decoration:none;display:inline-block;">
                    Palikite atsiliepimą Google
                </a>
            </div>
            <div class="services-table-wrapper" style="overflow-x:auto;position:relative;">
                <div style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;opacity:0.22;background:url('<?php echo get_template_directory_uri(); ?>/images/table.jpg') center center/cover no-repeat;"></div>
                <table class="services-table" style="width:100%;border-collapse:collapse;background:rgba(24,24,24,0.92);color:#fff;position:relative;z-index:1;">
                    <thead>
                        <tr style="background:#222;">
                            <th style="padding:10px 8px;text-align:center;">Paslauga</th>
                            <th style="padding:10px 8px;text-align:center;">Mažas auto</th>
                            <th style="padding:10px 8px;text-align:center;">Vidutinis auto</th>
                            <th style="padding:10px 8px;text-align:center;">Didelis auto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td style="text-align:left;"><b>🔥 1 Etapo poliravimas</b></td><td style="text-align:center;">100€</td><td style="text-align:center;">120€</td><td style="text-align:center;">140€</td></tr>
                        <tr><td style="text-align:left;"><b>🔥 2 Etapų poliravimas</b></td><td style="text-align:center;">150€</td><td style="text-align:center;">180€</td><td style="text-align:center;">210€</td></tr>
                        <tr><td style="text-align:left;"><b>🔥 3 Etapų poliravimas</b></td><td style="text-align:center;">250€</td><td style="text-align:center;">300€</td><td style="text-align:center;">350€</td></tr>
                        <tr><td style="text-align:left;">Detalės šlifavimas</td><td colspan="3" style="text-align:center;">30-50€</td></tr>
                        <tr><td style="text-align:left;"><b>⭐ Keraminė danga iki 12mėn</b></td><td colspan="3" style="text-align:center;">80-100€</td></tr>
                        <tr><td style="text-align:left;"><b>⭐ Keraminė danga iki 36mėn</b></td><td colspan="3" style="text-align:center;">140-160€</td></tr>
                        <tr><td style="text-align:left;"><b>⭐ Nano danga stiklams</b></td><td colspan="3" style="text-align:center;">30€</td></tr>
                        <tr><td style="text-align:left;"><b>🧽 Cheminis salono valymas</b></td><td colspan="3" style="text-align:center;">100-200€</td></tr>
                        <tr><td style="text-align:left;"><b>🧽 Sausas salono valymas</b></td><td colspan="3" style="text-align:center;">50€</td></tr>
                        <tr><td style="text-align:left;"><b>🧽 Vaikiškos kėdutės valymas</b></td><td colspan="3" style="text-align:center;">20€</td></tr>
                        <tr><td style="text-align:left;"><b>🧽 Lubų valymas</b></td><td colspan="3" style="text-align:center;">Papildoma paslauga, kaina derinama individualiai</td></tr>
                    </tbody>
                </table>
            </div>
            <div class="special-offer" style="margin:32px 0 0 0;padding:18px 24px;background:#222;border-left:4px solid #ffb347;border-radius:8px;color:#fff;font-size:1.15rem;font-weight:500;">
                <span style="color:#ffb347;font-weight:700;">Specialus pasiūlymas:</span> Vieno etapo poliravimas + keraminė danga tik <span style="color:#ffb347;font-weight:700;">165€</span>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
