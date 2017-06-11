<?php /* Template Name: What we do */ 


get_header();

Mk_Static_Files::addAssets('mk_button'); 
Mk_Static_Files::addAssets('mk_audio');
Mk_Static_Files::addAssets('mk_swipe_slideshow');

mk_build_main_wrapper( mk_get_view('singular', 'wp-what-we-do', true) );
?>
<div class="slogan">
	<quote>We help our student beneficiaries realise their full potential, in turn they commit to work hard and to pay it forward in time.</quote>
</div>
<div class="our-ethos">

	<h2>Our ethos is to PROSPECT</h2>


	<span class="ethos-letter" style="color:#ea8b2d;">P</span>
	<span class = "hidden animated-element" style="display:inline-block;">
		ay forward to give back
	</span><br>

	<span class="ethos-letter" style="color:#d82229;">R</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	espect integrity and diversity
	</span><br>

	<span class="ethos-letter" style="color:#d8117d;">O</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	ptimise potential to empower
	</span><br>

	<span class="ethos-letter" style="color:#802b7c;">S</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	erve community as pro-active change makers
	</span><br>

	<span class="ethos-letter" style="color:#005f9e;">P</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	lan with purpose to initiate, innovate and inspire
	</span><br>

	<span class="ethos-letter" style="color:#008bc6;">E</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	ncourage diligence, embrace achievement	
	</span><br>

	<span class="ethos-letter" style="color:#78c5c6;">C</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	ollaborate to nurture and care
	</span><br>

	<span class="ethos-letter" style="color:#009e4a;">T</span>
	<span class = "hidden animated-element" style="display:inline-block;">
	ackle barriers through our journey of discovery and self worth
	</span>
</div>

<div class="our-ethos-mobile">

	<h2>Our ethos is to PROSPECT</h2>


	<span class="ethos-letter" style="color:#ea8b2d;">P</span>

		ay forward to give back
	<br>

	<span class="ethos-letter" style="color:#d82229;">R</span>
	
	espect integrity and diversity
	<br>

	<span class="ethos-letter" style="color:#d8117d;">O</span>
	
	ptimise potential to empower
	<br>

	<span class="ethos-letter" style="color:#802b7c;">S</span>
	
	erve community as pro-active change makers
	<br>

	<span class="ethos-letter" style="color:#005f9e;">P</span>
	
	lan with purpose to initiate, innovate and inspire
	<br>

	<span class="ethos-letter" style="color:#008bc6;">E</span>
	
	ncourage diligence, embrace achievement	
	<br>

	<span class="ethos-letter" style="color:#78c5c6;">C</span>
	
	ollaborate to nurture and care
	<br>

	<span class="ethos-letter" style="color:#009e4a;">T</span>	
	ackle barriers through our journey of discovery and self worth
	
</div>
<?php 
get_footer();