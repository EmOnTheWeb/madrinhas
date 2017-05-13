<?php 

global $mk_options;

if (have_posts()) 

	while (have_posts()):
	    the_post();
		
		do_action('mk_page_before_content');
	?>
	<div id='bubbles' style="position: relative; width: 95%; margin:0 auto;">



	</div>


	<?php 
	    the_content();

	    do_action('mk_page_after_content');
		?>
		<div class="clearboth"></div>
		<?php

	    wp_link_pages('before=<div id="mk-page-links">' . esc_html__( 'Pages:', 'mk_framework' ) . '&after=</div>');

	endwhile;

