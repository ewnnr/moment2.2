<footer>
        <div class="kontakt">
            <img src="<?=get_template_directory_uri();?>/bilder/telefon.png" alt="Telefonikon">070-123 45 67
            <img src="<?=get_template_directory_uri();?>/bilder/mail.png" alt="Mailikon"> Hej@skogab.se
            <img src="<?=get_template_directory_uri();?>/bilder/hus.png" alt="Husikon"> Skogsvägen 1, 123 45 Skogen
        </div>
        <div class="social">
            <img src="<?=get_template_directory_uri();?>/bilder/facebook.png" alt="Facebookikon">
            <img src="<?=get_template_directory_uri();?>/bilder/twitter.png" alt="Twitterikon">
            <img src="<?=get_template_directory_uri();?>/bilder/instagram.png" alt="Instagramikon">
            <img src="<?=get_template_directory_uri();?>/bilder/linkedin.png" alt="Linkedinikon">
        </div>
        <script src="<?=get_template_directory_uri();?>/main.js"></script>
        <div id="primary-sidebar" class="primary-sidebar widget-area">
                <?php if (dynamic_sidebar('home_right_1')) : endif; ?>
    </div>
    </footer>
    <?php wp_footer();?>
</body>

</html>