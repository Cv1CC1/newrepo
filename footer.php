<?php wp_footer();?>

<div class="footer-menu">
    <footer>
        <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
            ));
        ?>
        <p class="copyright">COPYRIGHT © 2022 SKELETON SAFETY TECHNOLOGY INC.</br> ALL RIGHTS RESERVED.</p>   
    </footer>
</div>

</body>
</html>