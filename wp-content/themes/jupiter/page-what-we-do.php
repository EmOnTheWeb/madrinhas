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
<div class="our-ethos">

	<h2>Our ethos is to PROSPECT</h2>


	<span class="ethos-letter" style="color:#ea8b2d;">P</span>
	<span class = "hidden animated-element" style="display:inline-block;">
		ay forward – mentees commit to work hard and pay forward to give back to the world in time
	</span><br>

	<span class="ethos-letter" style="color:#d82229;">R</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	espect Integrity – respect diversity and integrity in our community
	</span><br>

	<span class="ethos-letter" style="color:#d8117d;">O</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	ptimise Potential – empower mentees to realise their potential
	</span><br>

	<span class="ethos-letter" style="color:#802b7c;">S</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	erve community – serve the community, lead and be pro-active change makers
	</span><br>

	<span class="ethos-letter" style="color:#005f9e;">P</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	lan Effectively – plan to initiate, innovate and inspire change
	</span><br>

	<span class="ethos-letter" style="color:#008bc6;">E</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	ncourage achievement – embrace diligence and success	
	</span><br>

	<span class="ethos-letter" style="color:#78c5c6;">C</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	ollaborate Care – collaborate with partner charities to nurture our mentees
	</span><br>

	<span class="ethos-letter" style="color:#009e4a;">T</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	ackle Barriers – tackle barriers through their educational journey of discover and self worth.
	</span>
</div>

<div class="our-ethos-mobile">

	<h2>Our ethos is to PROSPECT</h2>


	<span class="ethos-letter" style="color:#ea8b2d;">P</span>

		ay forward – mentees commit to work hard and pay forward to give back to the world in time
	<br>

	<span class="ethos-letter" style="color:#d82229;">R</span>
	
	espect Integrity – respect diversity and integrity in our community
	<br>

	<span class="ethos-letter" style="color:#d8117d;">O</span>
	
	ptimise Potential – empower mentees to realise their potential
	<br>

	<span class="ethos-letter" style="color:#802b7c;">S</span>
	
	erve community – serve the community, lead and be pro-active change makers
	<br>

	<span class="ethos-letter" style="color:#005f9e;">P</span>
	
	lan Effectively – plan to initiate, innovate and inspire change
	<br>

	<span class="ethos-letter" style="color:#008bc6;">E</span>
	
	ncourage achievement – embrace diligence and success	
	<br>

	<span class="ethos-letter" style="color:#78c5c6;">C</span>
	
	ollaborate Care – collaborate with partner charities to nurture our mentees
	<br>

	<span class="ethos-letter" style="color:#009e4a;">T</span>	
	ackle Barriers – tackle barriers through their educational journey of discover and self worth.
	
</div>
<?php 
get_footer();