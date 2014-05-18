<?php get_header(); ?>
<div id="wrapper" class="sixteen columns row container">
    <section class="nine columns right-content">
        <small class="nine columns row ny-small"><a title="Home" href="<?php echo home_url('/'); ?>">Home</a> << Back <img src="<?php bloginfo('template_url'); ?>/images/icon/computer.png" /> Category : <?php the_category(', ') ?></small>
        <?php in_category($category, $_post) ?>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="post-entry">
                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                            <?php the_post_thumbnail('post-thumbnail'); ?>
                        </a>
                    <?php endif; ?>
                    <?php the_excerpt(); ?>
                    <?php get_template_part('post-data'); ?>
                </div>
                <div class="clear"></div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php
        wp_reset_query();
        ?>
        <?php get_template_part('loop-nav'); ?>
    </section>
    <scetion class="five columns left-widgets">
        <?php if (!dynamic_sidebar('blog-widgets')) : ?>
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
</div>
<?php get_footer(); ?>