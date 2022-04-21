<?php
/**
 * The template for displaying the footer
 *
 */

?>

</main>

<footer class="site-footer">
    <div class="container-paiements">
        <h2>Paiements sécurisés</h2>
        <div class="container-paiements__logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="Paypal">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" alt="Visa">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="MasterCard">
        </div>
    </div>
    <div class="container-mentions">
        <h2>Mentions légales</h2>
        <div class="container-mentions__list">
            <a href="/mentions-legales">Mentions légales</a>
            <a href="/politique-de-confidentialite">Conditions générales de ventes</a>
            <a href="/conditions-utilisations">Conditions générales d'utilisations</a>
        </div>
    </div>
    <div class="container-contact">
        <h2>Nous contacter</h2>
        <div class="container-contact__list">
            <a href="tel:<?php echo the_field("footer_tel");?>">Téléphone : <?php echo the_field("footer_tel"); ?></a>
            <a href="mailto:<?php echo the_field("footer_mail");?>">Mail : <?php echo the_field("footer_mail"); ?></a>
            <a href="">Instagram : <?php echo the_field("footer_insta"); ?></a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>