<?php 

global $mk_options;

if (have_posts()) 

	while (have_posts()):
	    the_post();
		
		do_action('mk_page_before_content');

	    the_content();

?>

<div class = 'graduation'>
<!-- 	<i class="fa fa-graduation-cap" aria-hidden="true"></i> -->

	<div class = 'graduation__text'>
	<?php $uploads = wp_upload_dir(); ?>
	
		<span class = 'text__number' ><img src='<?php echo $uploads['baseurl']; ?>/2017/fancy/circles.png'><span class='count'>9</span> </span>of our mentees have graduated

	</div>
	

</div>

	    Where Do We Go From Here?

Alumni

This year we see 5 new graduates from our Madrinha sponsorship. Together with 4 previous graduates, we will kick start the Madrinha Alumni. They will be the future mentors and co-mentors , giving back to future mentees . Hopefully, this will be the beginning of the Madrinha legacy of giving forward, and giving back.
	<?php 
	    do_action('mk_page_after_content');
		?>
		<div class="clearboth"></div>
		<?php

	    wp_link_pages('before=<div id="mk-page-links">' . esc_html__( 'Pages:', 'mk_framework' ) . '&after=</div>');

	endwhile;