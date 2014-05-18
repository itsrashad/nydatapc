<?php
/**
  Template Name: Sitemap
 */
?>
<?php get_header(); ?>

<div id="dev-wrapper" class="clearfix">
    <div id="dev-content" class="full-fluid">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="post-entry">

                        <div class="one_third">
                            <div class="dev-widget-title"><?php _e('Pages', 'devbd'); ?></div>
                            <ul><li><?php wp_list_pages("title_li="); ?></li></ul>  

                        </div>

                        <div class="one_third">
                            <div class="dev-widget-title"><?php _e('Latest Posts', 'devbd'); ?></div>
                            <ul><?php
                                $archive_query = new WP_Query('posts_per_page=-1');
                                while ($archive_query->have_posts()) : $archive_query->the_post();
                                    ?>
                                    <li>
                                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'devbd'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>  
                        </div>

                        <div class="one_third last">
                            <div class="dev-widget-title"><?php _e('Categories', 'devbd'); ?></div>
                            <ul><?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&title_li='); ?></ul>        
                        </div>

                    </div>
                </div>          

            </div><!-- end of #post-<?php the_ID(); ?> -->

            <?php
        endwhile;
    else :
    endif;
    ?>  
</div> 

<?php get_footer(); ?>
