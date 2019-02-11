<?php /* Template Name: Mentee map */ 


get_header();

Mk_Static_Files::addAssets('mk_button'); 
Mk_Static_Files::addAssets('mk_audio');
Mk_Static_Files::addAssets('mk_swipe_slideshow');

echo '<section style="padding: 60px 80px;font-size:22px;font-weight:500;line-height:1.2;">'; 
echo 'We currently sponsor 77 mentees, including 37 new mentees in 2018/19'; 

echo '</section>'; 

echo '<section style="background-color:white; padding:40px 80px;"><a class="slick-style-btn">View mentees by subject</a><a class="slick-style-btn">View mentees by country</a></section>'; 

mk_build_main_wrapper( mk_get_view('singular', 'wp-mentee-map', true) );

mk_build_main_wrapper( mk_get_view('singular', 'wp-mentee-map', true) );

get_footer();