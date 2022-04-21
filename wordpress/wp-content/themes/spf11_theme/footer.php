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
        <div>
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
    </div>
    <div class="container-mentions">
        <h2>Mentions légales</h2>
        <div>
            <a href="">Mentions légales</a>
            <a href="">Conditions générales de ventes</a>
            <a href="">Conditions générales d'utilisations</a>
        </div>
    </div>
    <div class="contact">
        <h2>Nous contacter</h2>
        <div>
            <a href="tel:<?php echo the_field("footer_tel");?>"><?php echo the_field("footer_tel"); ?></a>
            <a href="mailto:<?php echo the_field("footer_mail");?>"><?php echo the_field("footer_mail"); ?></a>
            <a href=""><?php echo the_field("footer_insta"); ?></a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>