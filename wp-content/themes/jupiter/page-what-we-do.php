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
<div style="height:600px; text-align:center;">
	<span class="ethos-letter" style="color:blue;">P</span>
	<span class = "hidden animated-element" style="display:inline-block;">
		ay forward – mentees commit to work hard and pay forward to give back to the world in time
	</span><br>

	<span class="ethos-letter" style="">R</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	espect Integrity – respect diversity and integrity in our community
	</span><br>

	<span class="ethos-letter" style="">O</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	ptimise Potential – empower mentees to realise their potential
	</span><br>

	<span class="ethos-letter" style="">S</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	erve community – serve the community, lead and be pro-active change makers
	</span><br>

	<span class="ethos-letter" style="">P</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	lan Effectively – plan to initiate, innovate and inspire change
	</span><br>

	<span class="ethos-letter" style="">E</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	ncourage achievement – embrace diligence and success	
	</span><br>

	<span class="ethos-letter" style="">C</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	ollaborate Care – collaborate with partner charities to nurture our mentees
	</span><br>

	<span class="ethos-letter" style="">T</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	ackle Barriers – tackle barriers through their educational journey of discover and self worth.
	</span>
</div>
<?php 
get_footer();