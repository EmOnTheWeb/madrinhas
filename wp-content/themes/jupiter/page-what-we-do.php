<?php /* Template Name: What we do */ 


get_header();

Mk_Static_Files::addAssets('mk_button'); 
Mk_Static_Files::addAssets('mk_audio');
Mk_Static_Files::addAssets('mk_swipe_slideshow');

mk_build_main_wrapper( mk_get_view('singular', 'wp-what-we-do', true) );
?>
<div class="slogan">
	<quote>We help our student beneficiaries realize their full potential, in turn they commit to work hard and to pay it forward in time.</quote>
</div>
<?php 
get_footer();