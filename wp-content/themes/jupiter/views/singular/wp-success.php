<?php 

global $mk_options;

if (have_posts()) 

	while (have_posts()):
	    the_post();

		do_action('mk_page_before_content');

	    the_content();

?>

<div class = 'custom-container'>	
	<div class = 'graduation'>
		<!-- 	<i class="fa fa-graduation-cap" aria-hidden="true"></i> -->

			<div class = 'graduation__text'>
			<?php $uploads = wp_upload_dir(); ?>
			
				<span class = 'text__number' ><img src='<?php echo $uploads['baseurl']; ?>/2017/fancy/circles.png'><span class='count'>14</span> </span>of our mentees have graduated

			</div>

		</div>
	</div>

</div>
	<?php 
	    do_action('mk_page_after_content');
		?>
		<div class="clearboth"></div>
		<?php

	    wp_link_pages('before=<div id="mk-page-links">' . esc_html__( 'Pages:', 'mk_framework' ) . '&after=</div>');

	endwhile;