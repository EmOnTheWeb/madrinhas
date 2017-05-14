<?php
/**
 * template part for footer navigate to top module. views/footer
 *
 * @author 		Artbees
 * @package 	jupiter/views
 * @version     5.0.0
 */

?>

<a href="#top-of-page" class="mk-go-top  js-smooth-scroll js-bottom-corner-btn js-bottom-corner-btn--back">
<?php if( is_page(712)) { ?>
	<span>Back to map</span>
	<span class='mobile-text'>Back to top</span>
<?php } ?>
	<?php Mk_SVG_Icons::get_svg_icon_by_class_name(true, 'mk-icon-chevron-up', 16); ?>
</a>
