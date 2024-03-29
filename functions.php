<?php
if (get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
}

// Create a function for register_nav_menus()
function add_nydatapc_support() {

    register_nav_menus(
            array(
                'main-menu' => __('Main Navigation'),
            )
    );
}

add_action('init', 'add_nydatapc_support');

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

if (function_exists('add_image_size')) {
    add_image_size('featured', 400, 250, true);
    add_image_size('post-thumb', 125, 75, true);
}

function create_post_type() {
    register_post_type('nydatapc_portfolio', array('labels' =>
        array(
            'name' => __('Portfolios'),
            'singular_name' => __('portfolio')
        ),
        'public' => true,
        'menu_position' => 5,
        'rewrite' => array('slug' => 'portfolio'),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies' => array('post_tag')
            )
    );
}

add_action('init', 'create_post_type');

function getPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 Plays";
    }
    return $count . '';
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

if (function_exists(register_sidebar)) {
    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-widgets',
        'description' => 'Place widgets for the sidebar here.',
        'before_widget' => '<div class="sidebar-right">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => 'Footer Widgets',
        'id' => 'footer-widgets',
        'description' => 'Place widgets for the footer here.',
        'before_widget' => '<div class="four columns">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => 'Left Sidebar',
        'id' => 'left-widgets',
        'description' => 'Place widgets for the sidebar here.',
        'before_widget' => '<div class="sidebar-left">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'id' => 'right-widgets',
        'description' => 'Place widgets for the sidebar here.',
        'before_widget' => '<div class="sidebar-right">',
        'after_widget' => '</div>'
    ));
}

function custom_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>">
            <header class="comment-header">
                <?php echo get_avatar($comment, $size = '48', $default = get_bloginfo('template_url') . '/images/icon/comment.png'); ?>
                <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
                <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'), '  ', '') ?></div>
            </header>
            <?php if ($comment->comment_approved == '0') : ?>
                <em><?php _e('Your comment is awaiting moderation.') ?></em>
                <br>
            <?php endif; ?>

            <?php comment_text() ?>

            <div class="reply">
                <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>
        </div>
        <?php
    }
    ?>