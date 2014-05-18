<?php get_header(); ?>
<div id="wrapper" class="sixteen columns row container">       
    <section class="nine columns right-content">
        <small class="nine columns row ny-small"><a title="Home" href="<?php echo home_url('/'); ?>">Home</a> &asymp; Blog</small>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                <div class="post-entry">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                            <?php the_post_thumbnail('post-thumbnail'); ?>
                        </a>
                    <?php endif; ?>  
                    <?php the_excerpt(); ?>
                    <?php get_template_part('post-data'); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
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

<!-- #wrapper -->
<?php get_footer(); ?>