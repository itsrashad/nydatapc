<?php if ( ! is_page() && ! is_search() ) { ?>

	<small	class="post-data">
		<?php the_tags(__('Tagged with:') . ' ', ', ', '<br />'); ?> 
		<?php printf(__('Posted in %s'), get_the_category_list(', ')); ?> 
        </small><!--end of .post-data --> 
 
<?php } ?>           

<div class="post-edit"><?php edit_post_link(__('Edit')); ?></div>  