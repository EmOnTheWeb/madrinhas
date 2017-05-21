<!DOCTYPE html>
<html <?php echo language_attributes();?> >
<head>
    <?php wp_head(); ?>
    <script src="https://use.fontawesome.com/85dc49f962.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/number-counter.js"></script>
	<?php if( is_page(788)) { ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/stylesheet/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/stylesheet/slick.css"/>
	<?php } ?>
</head>

<body <?php body_class(mk_get_body_class(global_get_post_id())); ?> <?php echo get_schema_markup('body'); ?> data-adminbar="<?php echo is_admin_bar_showing() ?>">

	<?php
		// Hook when you need to add content right after body opening tag. to be used in child themes or customisations.
		do_action('theme_after_body_tag_start');
	?>

	<!-- Target for scroll anchors to achieve native browser bahaviour + possible enhancements like smooth scrolling -->
	<div id="top-of-page"></div>

		<div id="mk-boxed-layout">

			<div id="mk-theme-container" <?php echo is_header_transparent('class="trans-header"'); ?>>

				<?php mk_get_header_view('styles', 'header-'.get_header_style());