<?php get_header(); ?>
<div id="wrapper" class="sixteen columns row container">
    <section class="nine columns right-content">
        <small class="nine columns row"><a title="Home" href="<?php echo home_url('/'); ?>">Home</a> &perp; <?php the_category(',') ?> &perp; <?php the_title(); ?></small>
        <h1 class="entry-title"><a title="<?php printf(esc_attr__('Permalink to %s', 'compass'), the_title_attribute('echo=0')); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
                <?php the_title(); ?>
            </a></h1>
        <Small class="nine columns row">Written by: <strong><?php echo get_the_author_link(); ?></strong>, Published on <strong><?php the_time('F j, Y'); ?></strong></Small>
        <?php if (have_posts()) : ?> <?php while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_content(); ?>
                    <?php
                endwhile;
            else : endif;
            ?>
            <div class="navigation">
                <div class="older">
                    <?php previous_post_link(); ?>
                </div>
                <div class="newer">
                    <?php next_post_link(); ?>
                </div>
            </div>
            <?php comments_template(); ?>
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
            <?php endif; ?>
        </div>
    </scetion>
</div>
<div class="clear"></div>
<?php get_footer(); ?>