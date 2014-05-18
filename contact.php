<?php
/**
 * Template Name: Contact Template
 */
get_header();
?>
<?php
if (isset($_POST['sendmail'])) {

    $name = $_POST['name'];

    $email = $_POST['email'];

    $website = $_POST['website'];

    $subject = $_POST['subject'];

    $message = $_POST['message'];

    $to = "itsrashad@gmail.com";

    if (empty($name) OR empty($email) OR empty($subject) OR empty($message)) {

        echo "<div class='errors'>Sorry, You must fill the required fields<strong>(*)</strong></div>";
    } else {

        @mail($to, $subject, $message, "From: $name  <$email>");

        echo "<div class='done'>Email has been sent, we will get back to you ASP!</strong></div>";
    }
}
?>
<section class="eleven columns row container">
    <h1 class="entry-title"><a title="<?php printf(esc_attr__('Permalink to %s', 'compass'), the_title_attribute('echo=0')); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
<?php the_title(); ?>
        </a></h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
            <?php
        endwhile;
    endif;
    ?>
    <form class="form" action="" method="post" name="contactus">

        <fieldset>

            <legend>Your Personal Info</legend>

            <label>Name</label><input name="name" type="text" size="45" /><br />

            <label>Email</label><input name="email" type="text" size="45" /><br />

            <label>Website</label><input name="website" type="text" size="45" /><br />

        </fieldset>

        <fieldset>

            <legend>Your Message</legend>

            <label>Subject</label><input name="subject" type="text" size="45" /><br />

            <label>Message</label><textarea name="message" cols="35" rows="7"></textarea>

        </fieldset>

        <input name="sendmail" type="submit" value="Send Email" />

    </form>
    <div class="row">
        <div class="eleven columns">
<?php echo get_the_tag_list('<div class="tags">', ' ', '</div>'); ?>
            <div class="dev-navigation">
                <div class="older">
            <?php previous_post_link(); ?>
                </div>
                <div class="newer">
                    <?php next_post_link(); ?>
                </div>
            </div>
            <div class="author-box">
<?php echo get_avatar(get_the_author_meta('user_email'), $size = '60', $default = 'devbd.com/wp-content/themes/devbd/images/default-avatar.png'); ?>
                <Small class="meta-info">Written by: <strong><?php the_author_posts_link(); ?></strong>, Published on <strong><?php the_time('F j, Y'); ?></strong></Small>
                <div class="meta-info">Viewed <?php echo getPostViews(get_the_ID()); ?> times</div>
                <p><?php echo get_the_author_meta('description'); ?></p>
            </div>
<?php comments_template(); ?>
        </div>
    </div>
</section>
<section class="sidebar-list five columns row">
<?php if (!dynamic_sidebar('sidebars-widgets')) : ?>
        <div class="dev-widget-wrapper">
            <div class="dev-widget-title">
        <?php _e('In Archive'); ?>
            </div>
            <ul>
                <?php wp_get_archives(array('type' => 'monthly')); ?>
            </ul>
        </div>
            <?php endif; ?>
</section>

    <?php get_footer(); ?>
