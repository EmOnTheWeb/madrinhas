<?php /* Template Name: Home page */ 


get_header();

Mk_Static_Files::addAssets('mk_button'); 
Mk_Static_Files::addAssets('mk_audio');
Mk_Static_Files::addAssets('mk_swipe_slideshow');

mk_build_main_wrapper( mk_get_view('singular', 'wp-home', true) );
?>
<div class="slogan">
	<quote>"if you think you’re too small to have an impact, try going to bed with a mosquito in the room”</quote>
	<span class="attribution">&nbsp; - Anita Roddick </span>
</div>

<?php 
get_footer();