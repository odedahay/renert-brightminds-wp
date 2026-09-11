<footer class="footer" id="contact">
    <div class="footer__inner">
        <div class="footer__meta">
            <p class="footer__copyright">@ Copyright <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>.<br>All rights reserved.</p>
            <ul class="footer__socials" aria-label="Social links">
                <li><a class="footer__social" href="https://www.facebook.com/BrightMindsCalgary/ " aria-label="Facebook" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('/assets/icons/social-1.svg')); ?>" alt="Facebook"></a></li>
                <li><a class="footer__social" href="https://www.instagram.com/renertbrightminds/ " aria-label="Instagram" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('/assets/icons/social-4.svg')); ?>" alt="Instagram"></a></li>
                <!-- <li><a class="footer__social" href="#" aria-label="LinkedIn"><img src="<?php //echo esc_url(get_theme_file_uri('/assets/icons/social-3.svg')); ?>" alt="LinkedIn"></a></li>
                <li><a class="footer__social" href="#" aria-label="YouTube"><img src="<?php //echo esc_url(get_theme_file_uri('/assets/icons/social-4.svg')) ?>" alt="YouTube"></a></li> -->
            </ul>
        </div>
        <address class="footer__address">
            Renert Bright Minds<br>
            32 Royal Vista Drive NW<br>	
            Calgary, AB T3R 1R8
        </address>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
