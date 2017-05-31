<?php /* Template Name: Home page */ 


get_header();

Mk_Static_Files::addAssets('mk_button'); 
Mk_Static_Files::addAssets('mk_audio');
Mk_Static_Files::addAssets('mk_swipe_slideshow');

mk_build_main_wrapper( mk_get_view('singular', 'wp-home', true) );
?>
<div class="slogan">
	<quote>"if you think you’re too small to have an impact, try going to bed with a mosquito in the room”</quote><br>
	<span class="attribution">&nbsp; - Anita Roddick </span>
</div>
<?php $uploads = wp_upload_dir(); ?>
<?php if(false) { ?>
<section class="where-we-work">
	<p class="where-we-work__text homepage__location-text">Though our focus is in West Africa, we sponsor students <a href="/beneficiaries/mentees/">our mentees</a> from all over the world. We do this with the help of our <a href="/beneficiaries/our-partners">partner charities</a></p>
	<img src="<?php echo $uploads['baseurl']; ?>/2017/05/africa.png" alt="africa map" width="100%">


</section>
<?php } ?>
<section class="family-images">
	<div class="row">
		<div class="heading"><span>Our family of mentors and mentees</span></div><div class="image-two" style='background-image:url("<?php echo $uploads['baseurl']; ?>/2017/05/img_0617.png");'></div>
	</div>
	<div class="row">
		<div class="image-three" style='background-image:url("<?php echo $uploads['baseurl']; ?>/2017/05/img_0618.png");'></div><div class="image-four" style='background-image:url("<?php echo $uploads['baseurl']; ?>/2017/05/img_0614.png");'></div>
	</div>
	<div class="row">
		<div class="image-five" style='background-image:url("<?php echo $uploads['baseurl']; ?>/2017/05/img_0620.png");'></div>
		<div class="image-one" style='background-image:url("<?php echo $uploads['baseurl']; ?>/2017/05/img_0615-1.png");'></div>
	</div>
</section>

<?php 
get_footer();