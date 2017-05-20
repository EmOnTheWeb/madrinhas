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
<section class="where-we-work">
	<p class="where-we-work__text">We sponsor students <a href="http://localhost:8888/who-do-we-support/">our mentees</a> from all over the world, but our focus is in West Africa. We do this with the help of our <a href="http://localhost:8888/who-do-we-support/">partner charities</a></p>
	<img src="http://localhost:8888/wp-content/uploads/2017/05/africa.png" alt="africa map" width="100%">


</section>

<?php 
get_footer();