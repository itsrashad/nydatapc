<?php
/**
 * Template Name: Home Page Template
 */
get_header();
?>

<section class="ny-contact">
    <div class="two_third">
        <h1>Computer/Laptop Repair New York - Same Day Service</h1>
        <p>We will reach you with in two hours to fix your all issues about your computer/laptop machine. We cover Brooklyn | Manhattan | Bronx | Queens.</p>
    </div>
    <div class="one_third last">
        <a target="_blank" title="Contact Us" href="http://nydatapc.com/contact-us/" class="button">Contact Us</a> 
    </div>
</section>
<div id="wrapper" class="sixteen columns row container">
    <section class="sixteen columns row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="clear"></div>
        <div class="portfolio">
            <h2>Our clients says</h2>
            <section>
                <?php
                $args = array('posts_per_page' => 5, 'post_type' => 'nydatapc_portfolio');
                $query = new WP_Query($args);
                while ($query->have_posts()) : $query->the_post();
                    ?>
                    <ul class="portfolio-thumb">
                        <?php the_post_thumbnail('portfolio-thumb'); ?>
                        <h3><?php the_title(); ?></h3>
                    </ul>

                    <?php
                endwhile;
                ?>
            </section>
        </div>
    </section>
</div>
<?php get_footer(); ?>
</div>