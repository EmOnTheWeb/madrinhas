<?php 

global $mk_options;

if (have_posts()) 

	while (have_posts()):
	    the_post();
		
		do_action('mk_page_before_content');
	?>
	<div class='mobile-flags'>
		<h2>Click the flags to view mentees by country</h2>
		<?php $uploads = wp_upload_dir(); ?>

		<div class='mobile-flags__title-flag'>
			<h4>Kenya</h4>
			<img src="<?php echo $uploads['baseurl']; ?>/2017/03/flag_of_kenya.png">
		</div>
		<div class='mobile-flags__title-flag'>
			<h4>Nigeria</h4>
			<img src="<?php echo $uploads['baseurl']; ?>/2017/03/flag_of_nigeria.svg_.png">
		</div>
		<div class='mobile-flags__title-flag'>
			<h4>Zambia</h4>
			<img src="<?php echo $uploads['baseurl']; ?>/2017/03/zm.gif">
		</div>
		<div class='mobile-flags__title-flag'>
			<h4>South Africa</h4>
			<img src="<?php echo $uploads['baseurl']; ?>/2017/03/flag_of_south_africa.svg_.png">
		</div>
		<div class='mobile-flags__title-flag'>
			<h4>Rwanda</h4>
			<img src="<?php echo $uploads['baseurl']; ?>/2017/03/flag_of_rwanda.svg_.png">
		</div>
			<div class='mobile-flags__title-flag'>
			<h4>Kenya</h4>
			<img src="<?php echo $uploads['baseurl']; ?>/2017/03/flag_of_kenya.png">
		</div>
		<div class='mobile-flags__title-flag'>
			<h4>Tunisia</h4>
			<img src="<?php echo $uploads['baseurl']; ?>/2017/04/tunisia-1.jpg">
		</div>
		<div class='mobile-flags__title-flag'>
			<h4>Nepal</h4>
			<img src="<?php echo $uploads['baseurl']; ?>/2017/03/nepal_flag_incorrect.png">
		</div>
		<div class='mobile-flags__title-flag'>
			<h4>Barbados</h4>
			<img src="<?php echo $uploads['baseurl']; ?>/2017/03/255px-flag_of_barbados.svg_.png">
		</div>

	</div>
	<h2>Click the circles to view mentees by country</h2>
	<div id='bubbles' style="position: relative; width: 100%; margin:0 auto;">



	</div>

	<?php 
	    the_content();

	    do_action('mk_page_after_content');
		?>
		<div class="clearboth"></div>
		<?php

	    wp_link_pages('before=<div id="mk-page-links">' . esc_html__( 'Pages:', 'mk_framework' ) . '&after=</div>');

	endwhile;

