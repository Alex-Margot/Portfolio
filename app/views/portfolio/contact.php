<?php
$language = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'fr';
?>

<div class="contact-container">
    <?php if ($language === 'en'): ?>
        <h2>Contact Information</h2>

        <p><strong>Name:</strong> Alex Margot</p>
        <p><strong>Email:</strong> <a href="mailto:MargotAlex@proton.me">MargotAlex@proton.me</a></p>
        <p><strong>Phone:</strong> +41 77 439 24 59</p>

        <p class="contact-text">Social Network<span id="secretTrigger" class="hidden-letter">s</span></p>

        <ul>
            <li><a href="https://www.linkedin.com/in/alex-margot" target="_blank">LinkedIn</a></li>
            <li><a href="https://github.com/Alex-Margot" target="_blank">GitHub</a></li>
        </ul>

        <!-- The hidden extra links -->
        <div id="extraLinks" class="hidden-links">
            <p>You found my other contact links ;)</p>
            <ul>
                <li><a href="https://instagram.com/Gamen0ut" target="_blank">Instagram</a></li>
                <br>
                <li><a href="https://discord.gg/rw8qAcdzpv" target="_blank">Discord</a></li>
                <br>
            </ul>
        </div>

    <?php else: ?>
        <h2>Coordonnées</h2>

        <p><strong>Nom :</strong> Alex Margot</p>
        <p><strong>Email :</strong> <a href="mailto:MargotAlex@proton.me">MargotAlex@proton.me</a></p>
        <p><strong>Téléphone :</strong> +41 77 439 24 59</p>

        <p class="contact-text">Réseaux sociau<span id="secretTrigger" class="hidden-letter">x</span></p>

        <ul>
            <li><a href="https://www.linkedin.com/in/alex-margot" target="_blank">LinkedIn</a></li>
            <li><a href="https://github.com/Alex-Margot" target="_blank">GitHub</a></li>
        </ul>

        <!-- The hidden extra links -->
        <div id="extraLinks" class="hidden-links">
            <p>Vous avez trouvé mes autres liens de contact ;)</p>
            <ul>
                <li><a href="https://instagram.com/Gamen0ut" target="_blank">Instagram</a></li>
                <br>
                <li><a href="https://discord.gg/rw8qAcdzpv" target="_blank">Discord</a></li>
                <br>
            </ul>
        </div>
    <?php endif; ?>
</div>

<script src="/scripts/secretslinks.js"></script>
