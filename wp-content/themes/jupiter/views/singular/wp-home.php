<?php
/**
* Content/view part for page.php
*
* @author 	Artbees
* @package 	jupiter/views
* @version     5.0.0
*/

global $mk_options;

if (have_posts()) 

	while (have_posts()):
	    the_post();
		
		do_action('mk_page_before_content');

	    the_content();

?>
<!-- <div class="homepage__partner-charities slogan">
Our partner charities help us find promising students

<div class="logo">
</div>
</div> -->
<div class="mentor-mentee-grid-section">
	<h2>We know every student we sponsor</h2>

	<p class="p1">Once selected, each mentee is matched with a mentor. A mentor provides support throughout the mentee's academic career, monitors their progress, and helps them realise their full potential. </p>
   
		<div class="homepage__potraits">
			<div class = "potrait-mentee">
				<a href="/mentees" class="potrait-overlay">
					View mentees

			 	</a>
			 	<div class = "caption-bar">A mentee!</div>
			</div>
		
		<i class="fa fa-handshake-o" aria-hidden="true"></i>

	
			<div class = "potrait-mentor">
				<a href="/mentors" class="potrait-overlay">
					View mentors

			 	</a>
				<div class = "caption-bar">A mentor!</div>
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