<?php get_header(); ?>
<div id="wrapper" class="sixteen columns row container">
    <div id="content" class="full-fluid">
        <h3>Return <a title="NyDataPC Home" href="<?php echo home_url('/'); ?>">Home</a> to start browsing again.</h3>
        <p style="color: #1FB1E6; font-size: 150px; text-align: center;">404</p>
        <h1 class="page-title"><?php _e('Not Found', 'devbd'); ?></h1>
        <h3><?php _e("We're sorry, but the page you were looking for doesn't exist.", 'cmsmasters'); ?></h3>
        <?php
        if ($error_search_show) {
            get_search_form();
        }
        ?>
        <?php if ($error_sitemap_show && $error_sitemap_link != '') { ?>
            <a href="<?php echo $error_sitemap_link; ?>" class="with_arrow"><?php _e('Sitemap', 'cmsmasters'); ?></a>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>
