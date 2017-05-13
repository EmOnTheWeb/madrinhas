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
			
				<span class = 'text__number' ><img src='<?php echo $uploads['baseurl']; ?>/2017/fancy/circles.png'><span class='count'>9</span> </span>of our mentees have graduated

			</div>

		</div>
	</div>
	<div class = 'white-background'>
	<div class = 'specialization'>
		<div class = 'half-width'>
			<i class="fa fa-graduation-cap specicalization__icon" aria-hidden="true"></i>

			<div class = 'specialization__text'>
				<span class = 'text__number'><span class='count'>4</span></span>  Graduated in <br><span class = 'text__specialization'>teaching</span>

			</div>
		</div>

		<div class = 'half-width'>
			<i class="fa fa-briefcase specicalization__icon" aria-hidden="true"></i>

			<div class = 'specialization__text'>
				<span class = 'text__number'><span class='count'>1</span></span>  Graduated in <br><span class = 'text__specialization'>business studies</span>

			</div>
		</div>
	</div>

	<div class = 'specialization'>
		<div class = 'half-width'>
			<i class="fa fa-stethoscope specicalization__icon" aria-hidden="true"></i>


			<div class = 'specialization__text'>
				<span class = 'text__number'><span class='count'>1</span></span>  Graduated in <br><span class = 'text__specialization'>medicine</span>

			</div>
		</div>

		<div class = 'half-width'>
			<i class="fa fa-users specicalization__icon" aria-hidden="true"></i>

			<div class = 'specialization__text'>
				<span class = 'text__number'><span class='count'>2</span></span>  Graduated in <br><span class = 'text__specialization'>performing arts</span>

			</div>
		</div>
	</div>

	<div class = 'specialization'>
		<div class = 'half-width'>
			<i class="fa fa-paw specicalization__icon" aria-hidden="true"></i>

			<div class = 'specialization__text'>
				<span class = 'text__number'><span class='count'>1</span></span>  Graduated in <br><span class = 'text__specialization'>vetinary science</span>

			</div>
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