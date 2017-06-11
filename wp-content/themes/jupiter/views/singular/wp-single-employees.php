<?php
global $post,
$mk_options;


if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<?php 
	$style = esc_attr( get_post_meta( $post->ID, '_employees_single_layout', true ) );
	$header_hero_skin = esc_attr( get_post_meta( $post->ID, '_header_hero_skin', true ) );
	$header_hero_bg_color = esc_attr( get_post_meta( $post->ID, '_header_hero_bg_color', true ) );
	$header_hero_bg_image = esc_attr( get_post_meta( $post->ID, '_header_hero_bg_image', true ) );

	if ($style != 'style3') {
		$image_width = 270;
		$image_height = 270;	
	}else {
		$image_width = 150;
		$image_height = 150;
	}
?>

<?php

if (!function_exists('mk_employees_meta_information')) {
    function mk_employees_meta_information()
    {
        $facebook = esc_url( get_post_meta( get_the_ID(), '_facebook', true ) );
        $linkedin = esc_url( get_post_meta( get_the_ID(), '_linkedin', true ) );
        $twitter = esc_url( get_post_meta( get_the_ID(), '_twitter', true ) );
        $email = sanitize_email( get_post_meta( get_the_ID(), '_email', true ) );
        $googleplus = esc_url( get_post_meta( get_the_ID(), '_googleplus', true ) );
        $instagram = esc_url( get_post_meta( get_the_ID(), '_instagram', true ) );


        $output = '<span class="employees_meta"><span class="team-member team-member-name s_meta a_align-center a_display-block a_margin-top-40 a_font-weight-bold a_color-333 a_font-22">'.get_the_title().'</span>';
        $output .= '<span class="team-member team-member-position s_meta a_align-center a_display-block a_margin-top-15 a_font-weight-normal a_color-777 a_font-14">'.get_post_meta( get_the_ID(), '_position', true ).'</span>';
        $output .= '<ul class="mk-employeee-networks s_meta">';
        if (!empty($email)) {
            $output.= '<li><a target="_blank" href="mailto:' . antispambot($email) . '" title="' . esc_attr__('Get In Touch With', 'mk_framework') . ' ' . the_title_attribute(array('echo' => false)) . '">'.Mk_SVG_Icons::get_svg_icon_by_class_name(false, 'mk-icon-envelope', 16).'</a></li>';
        }
        if (!empty($facebook)) {
            $output.= '<li><a target="_blank" href="' . $facebook . '" title="' . the_title_attribute(array('echo' => false)) . ' ' . esc_attr__('On', 'mk_framework') . ' Facebook">'.Mk_SVG_Icons::get_svg_icon_by_class_name(false, 'mk-moon-facebook', 16).'</a></li>';
        }
        if (!empty($twitter)) {
            $output.= '<li><a target="_blank" href="' . $twitter . '" title="' . the_title_attribute(array('echo' => false)) . ' ' . esc_attr__('On', 'mk_framework') . ' Twitter">'.Mk_SVG_Icons::get_svg_icon_by_class_name(false, 'mk-moon-twitter', 16).'</a></li>';
        }
        if (!empty($googleplus)) {
            $output.= '<li><a target="_blank" href="' . $googleplus . '" title="' . the_title_attribute(array('echo' => false)) . ' ' . esc_attr__('On', 'mk_framework') . ' Google Plus">'.Mk_SVG_Icons::get_svg_icon_by_class_name(false, 'mk-moon-google-plus', 16).'</a></li>';
        }
        if (!empty($linkedin)) {
            $output.= '<li><a target="_blank" href="' . $linkedin . '" title="' . the_title_attribute(array('echo' => false)) . ' ' . esc_attr__('On', 'mk_framework') . ' Linked In">'.Mk_SVG_Icons::get_svg_icon_by_class_name(false, 'mk-jupiter-icon-simple-linkedin', 16).'</a></li>';
        }
        if (!empty($instagram)) {
            $output.= '<li><a target="_blank" href="' . $instagram . '" title="' . the_title_attribute(array('echo' => false)) . ' ' . esc_attr__('On', 'mk_framework') . ' Instagram">'.Mk_SVG_Icons::get_svg_icon_by_class_name(false, 'mk-jupiter-icon-simple-instagram', 16).'</a></li>';
        }
        $output.= '</ul></span>';

        echo $output;
    }
}



?>

	<?php if ($style == 'style1'): ?>
				<div class="mk-grid">
				<div class="single-employee-sidebar a_display-inline-block a_float-left">
					<?php mk_get_view('global', 'featured-image', false, ['post_type'=> 'employees', 'width' => $image_width, 'height' => $image_height]); ?>
					<?php mk_employees_meta_information(); ?>
				</div>
				<div class="single-employee-content">
					<?php the_content(); ?>
				</div>
				</div>
	<?php elseif ($style == 'style2'): ?>
				<div class="mk-grid">
				<div class="single-employee-sidebar a_display-inline-block a_float-left">
					<?php mk_get_view('global', 'featured-image', false, ['post_type'=> 'employees', 'width' => $image_width, 'height' => $image_height]); ?>
				</div>
				<div class="single-employee-content">
					<?php mk_employees_meta_information(); ?>
					<?php the_content(); ?>
				</div>
				</div>
	<?php else: ?>
		<div class="single-employee-hero-title a_align-center a_margin-bottom-20 skin-<?php echo $header_hero_skin ?>"
				style="
				background-color:<?php echo $header_hero_bg_color ?>; 
				background-image:url(<?php echo $header_hero_bg_image ?>); 
				background-size: cover; background-position: center center;
				">
			<?php mk_get_view('global', 'featured-image', false, ['post_type'=> 'employees', 'width' => $image_width, 'height' => $image_height]); ?>
			<?php mk_employees_meta_information(); ?>
		</div>
			<div class="mk-grid">
				<div class="single-employee-content">
					<?php the_content(); ?>
				</div>
			</div>
	<?php endif ?>
	<?php 
		$cats = get_the_terms($post->ID,'employees_category'); 
		$link = ($cats[0]->slug === 'trustee')? '/trustees/' : '/mentors/'; 
	?>
	
	<?php 
		
	$current_cat_id = $cats[0]->term_id; // current category ID 

	$posts = get_posts(
	    array(
	        'posts_per_page' => -1,
	        'post_type' => 'employees',
	        'order' => 'ASC',
    		'orderby' => 'title',
    		'post__not_in' => array(113),
	        'tax_query' => array(
	            array(
	                'taxonomy' => 'employees_category',
	                'field' => 'term_id',
	                'terms' => $cats[0]->term_id,
	            )
	        )
	    )
	); 
	// get IDs of posts retrieved from get_posts 
	$ids = array();
	foreach ( $posts as $thepost ) {
	    $ids[] = $thepost->ID;
	}
	// get and echo previous and next post in the same category
	$thisindex = array_search( $post->ID, $ids );
	$previd = $ids[ $thisindex - 1 ];
	$nextid = $ids[ $thisindex + 1 ];
	?>
	<div class="button-container-row">
	<?php
	if(strtolower($post->post_title) !== 'jania geoghegan') {
		if ( ! empty( $previd ) ) {
		    ?><a rel="prev" class = 'prev-button' href="<?php echo get_permalink($previd) ?>">Previous</a><?php
		}
		else {?>
			<a rel="prev" class = 'prev-button' href="<?php echo get_permalink(113) ?>">Previous</a><?php
		}
		if ( ! empty( $nextid ) ) {
		    ?><a rel="next" class = 'next-button' href="<?php echo get_permalink($nextid) ?>">Next</a><?php
		}
	}
	else {
		?><a rel="next" class = 'next-button' href="<?php echo get_permalink(123) ?>">Next</a><?php	
	}

	?>
	</div>
	<a href="<?= $link ?>" class="back-button">
		Back to <?= $cats[0]->name ?>s
	</a>

<?php endwhile;?>