<footer id="footer">
    <div class="sixteen columns row container">
        <?php dynamic_sidebar('footer-widgets'); ?>
    </div>
    <div class="fifteen columns row footer">
        <div class="one_third">
            <a href="<?php bloginfo('rss2_url'); ?>" ><img class="footer-icon"src="<?php bloginfo('template_url'); ?>/images/icon/rss-icon.png" alt="RSS Feed" title="NyDataPC Feed" /></a>
        </div>
        <div class="one_third">                               
            <p class="footer-text"><?php esc_attr_e('&copy;', 'nydatapc'); ?> <?php _e(date('Y')); ?> <a title="NyDataPC.Com" href="<?php echo get_option('home'); ?>">NyDataPC.com</a> - All Rights Reserved</p>
        </div>
        <div class="one_third last">
            <p class="footer-text">Powered by <a title="WordPress.Org" href="http://www.wordpress.org">WordPress</a> | Developed By <a title="DevBD.Com" href="http://www.devbd.com">DevBD</a></p>
        </div>
    </div>
</footer>
</body>
<?php wp_footer(); ?>
</html>
