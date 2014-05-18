<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>
            <?php
            wp_title('|', 'true', 'right');
            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="resource-type" content="document" />
        <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
        <meta http-equiv="content-language" content="en-us" />
        <meta name="author" content="Andrei Vieru" />
        <meta name="contact" content="info@nydata.com" />
        <meta name="copyright" content="Copyright (c) 2014 
              Andrei Vieru. All Rights Reserved." />
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <meta name="keywords" content="" />
              <?php wp_enqueue_script('jquery'); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/skeleton.css">
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon" />
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="container">
            <div id="top-wrapper">
                <header class="header">
                    <p class="phone">
                        OPEN 10 AM - 6:00 PM | 6 DAYS A WEEK | 1-917-803-0646 
                    </p>
                    <div class="logo">
                        <a href="<?php echo get_option('home'); ?>" title="<?php bloginfo('title'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="computer-repair-nyc, mac-repair-nyc-ny" title="<?php bloginfo('title'); ?>"></a>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li class="social_icon"><a href="https://twitter.com/nydatapc" title="Twitter" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon/twitter.png" alt="twitter" border="0" /></a></li>
                            <li class="social_icon"><a href="https://www.facebook.com/NYDataPC" title="Facebook" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon/facebook.png" alt="facebook" border="0" /></a></li>
                            <li class="social_icon"><a href="http://www.linkedin.com/pub/andrei-vieru/18/404/485" title="LinkedIn" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon/linkedin.png" alt="linkedin" border="0" /></a></li>
                            <li class="social_icon"><a href="mailto:info@nydatapc.com" title="E-mail"><img src="<?php bloginfo('template_url'); ?>/images/icon/email.png" alt="email" border="0" /></a></li>
                            <li class="social_icon"><a href="http://nydatapc.com/feed/" title="RSS Feed" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon/rss.png" alt="rss feed" border="0" /></a></li>
                        </ul>
                    </div>
                </header>
                <div id="navigation">
                    <?php wp_nav_menu(array( 'theme_location' => 'main-menu', 'menu_class' => 'dropdown', 'container_id' => 'navwrap', 'fallback_cb' => 'wp_page_menu', )); ?>
                </div>
            </div>