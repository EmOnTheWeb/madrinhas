<?php /* Template Name: Mentee map */ 


get_header();

Mk_Static_Files::addAssets('mk_button'); 
Mk_Static_Files::addAssets('mk_audio');
Mk_Static_Files::addAssets('mk_swipe_slideshow');

echo '<section style="padding: 60px 80px;font-size:22px;font-weight:500;line-height:1.2;background-color:#3859cc;color:white;">'; 
echo 'We currently sponsor 77 mentees, including 37 new mentees in 2018/19'; 

echo '</section>'; 
echo '<a name="by-subject"></a>'; 
echo '<section style="background-color:white; padding:40px 80px;">
		<a id="mentee-subject-btn" href="#by-subject" class="slick-style-btn">View mentees by subject</a>
		<a id="country-subject-btn" href="#by-country" class="slick-style-btn">View mentees by country</a>
	</section>'; 

mk_build_main_wrapper( mk_get_view('singular', 'wp-mentee-study-overview', true) );

echo '<section style="padding: 60px 80px;font-size:22px;font-weight:500;line-height:1.2;background-color:#3859cc;color:white;">'; 
echo '<a name="by-country"></a>'; 
echo 'We operate with 13 partners out of 10 countries'; 

echo '</section>'; 

mk_build_main_wrapper( mk_get_view('singular', 'wp-mentee-map', true) );

get_footer();