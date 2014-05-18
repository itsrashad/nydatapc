<?php
if (  $wp_query->max_num_pages > 1 ) : 
	?>

	<div class="navigation">
		<div class="previous"><?php next_posts_link( __( '&#8249; Older Blogs', 'devbd' ) ); ?></div>
		<div class="next"><?php previous_posts_link( __( 'Newer Blogs &#8250;', 'devbd' ) ); ?></div>
	</div><!-- end of .navigation -->
	<?php 
endif;