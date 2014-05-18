<?php
/**
 * Template Name: Contact us
 */
get_header();
?>
<?php putRevSlider("contact") ?>
<div id="page-header">
    <div class="page-title">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div id="wrapper" class="sixteen columns row container">
 
    <section class="sixteen columns content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>    
</div>
<?php get_footer(); ?>