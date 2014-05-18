<?php
/**
 * Template Name: Left Sidebar
 */
get_header();
?>
<div id="page-header">
    <div class="page-title">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div id="wrapper" class="sixteen columns row container">
    <small class="sixteen columns row ny-small"><a title="Home" href="<?php echo home_url('/'); ?>">Home</a> &rarr; <?php the_title(); ?></small>
    <scetion class="five columns left-widgets">
        <?php if (!dynamic_sidebar('left-widgets')) : ?>
            <div class="widget-wrapper">
                <div class="widget-title">
                    <?php _e('In Archive'); ?>
                </div>
                <ul>
                    <?php wp_get_archives(array('type' => 'monthly')); ?>
                </ul>
            </div>
        <?php endif; ?>
    </scetion>
    <section class="nine columns right-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</div>
<?php get_footer(); ?>