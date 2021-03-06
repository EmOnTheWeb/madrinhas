<?php
global $mk_options;

$mk_footer_class = $show_footer = $disable_mobile = $footer_status = '';

$post_id = global_get_post_id();
if($post_id) {
  $show_footer = get_post_meta($post_id, '_template', true );
  $cases = array('no-footer', 'no-header-footer', 'no-header-title-footer', 'no-footer-title');
  $footer_status = in_array($show_footer, $cases);
}

if($mk_options['disable_footer'] == 'false' || ( $footer_status )) {
  $mk_footer_class .= ' mk-footer-disable';
}

if($mk_options['footer_type'] == '2') {
  $mk_footer_class .= ' mk-footer-unfold';
}


$boxed_footer = (isset($mk_options['boxed_footer']) && !empty($mk_options['boxed_footer'])) ? $mk_options['boxed_footer'] : 'true';
$footer_grid_status = ($boxed_footer == 'true') ? ' mk-grid' : ' fullwidth-footer';
$disable_mobile = ($mk_options['footer_disable_mobile'] == 'true' ) ? $mk_footer_class .= ' disable-on-mobile'  :  ' ';

?>

<section id="mk-footer-unfold-spacer"></section>

<section id="mk-footer" class="<?php echo $mk_footer_class; ?>" <?php echo get_schema_markup('footer'); ?>>
    <?php if($mk_options['disable_footer'] == 'true' && !$footer_status) : ?>
    <div class="footer-wrapper<?php echo $footer_grid_status;?>">
        <div class="mk-padding-wrapper">
            <p class="no-unsolicited">The Madrinha Trust does not accept unsolicited applications for funding</p>
            <?php mk_get_view('footer', 'widgets'); ?>
            <div class="clearboth"></div>
        </div>
    </div>
    <?php endif;?>
    <?php if ( $mk_options['disable_sub_footer'] == 'true' && ! $footer_status ) { 
        mk_get_view( 'footer', 'sub-footer', false, ['footer_grid_status' => $footer_grid_status] ); 
    } ?>
</section>
</div>
<?php 
    global $is_header_shortcode_added;
    
    if ( $mk_options['seondary_header_for_all'] === 'true' || get_header_style() === '3' || $is_header_shortcode_added === '3' ) {
        mk_get_header_view('holders', 'secondary-menu', ['header_shortcode_style' => $is_header_shortcode_added]); 
    }
?>
</div>

<div class="bottom-corner-btns js-bottom-corner-btns">
<?php
    if ( $mk_options['go_to_top'] != 'false' ) { 
        mk_get_view( 'footer', 'navigate-top' );
    }
    
    if ( $mk_options['disable_quick_contact'] != 'false' ) {
        mk_get_view( 'footer', 'quick-contact' );
    }
    
    do_action('add_to_cart_responsive');
?>
</div>


<?php if ( $mk_options['header_search_location'] === 'fullscreen_search' ) { 
    mk_get_header_view('global', 'full-screen-search');
} ?>

<?php if (!empty($mk_options['body_border']) && $mk_options['body_border'] === 'true') { ?>
    <div class="border-body border-body--top"></div>
    <div class="border-body border-body--left border-body--side"></div>
    <div class="border-body border-body--right border-body--side"></div>
    <div class="border-body border-body--bottom"></div>
<?php } ?>

<footer id="mk_page_footer">
    <?php
    
    wp_footer();

    if( is_page(712)) { ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/datamaps.world.min.js"></script>
    <?php } 

    if( (isset($mk_options['pagespeed-optimization']) and $mk_options['pagespeed-optimization'] != 'false')
     or (isset($mk_options['pagespeed-defer-optimization']) and $mk_options['pagespeed-defer-optimization'] != 'false')) {
    ?>
    <script>
        !function(e){var a=window.location,n=a.hash;if(n.length&&n.substring(1).length){var r=e(".vc_row, .mk-main-wrapper-holder, .mk-page-section, #comments"),t=r.filter("#"+n.substring(1));if(!t.length)return;n=n.replace("!loading","");var i=n+"!loading";a.hash=i}}(jQuery);
    </script>
    <?php } else { ?>
    <script>
        // Run this very early after DOM is ready
        (function ($) {
            // Prevent browser native behaviour of jumping to anchor
            // while preserving support for current links (shared across net or internally on page)
            var loc = window.location,
                hash = loc.hash;

            // Detect hashlink and change it's name with !loading appendix
            if(hash.length && hash.substring(1).length) {
                var $topLevelSections = $('.vc_row, .mk-main-wrapper-holder, .mk-page-section, #comments');
                var $section = $topLevelSections.filter( '#' + hash.substring(1) );
                // We smooth scroll only to page section and rows where we define our anchors.
                // This should prevent conflict with third party plugins relying on hash
                if( ! $section.length )  return;
                // Mutate hash for some good reason - crazy jumps of browser. We want really smooth scroll on load
                // Discard loading state if it already exists in url (multiple refresh)
                hash = hash.replace( '!loading', '' );
                var newUrl = hash + '!loading';
                loc.hash = newUrl;
            }
        }(jQuery));
    </script>
    <?php } ?>
    <?php if( is_page(712)) { ?>

        <script src="<?php echo get_template_directory_uri()?>/assets/js/menteemap.js"></script>

    <?php } ?>
    <?php if( is_page(745)) { ?>
   <!--  <script>
        (function($) {
            $('#jania-message').click(function(){

                var bubbles = $('.bubble-wrap').addClass('fade-in');
                $(this).remove(); 

                if($('.bubble-wrap').css('top') == '-150px' || $('.bubble-wrap').css('top') == '-100px' ) {
                    var displace = $('.bubble-wrap').height() - 45; 
                }
                else {
                    var displace = ($('.bubble-wrap').height()) - 370; 
                }
                $('.vc_custom_1494791495924.rest-of-trustees').attr('style','margin-top:' + displace + 'px !important');
            });
        })(jQuery);
    </script> -->
    <?php } ?>
    <?php if( is_page(788)) { ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/js/slick.min.js"></script>
    <script>
    (function($) {
        $('.mentor-slider').slick({
  
        });
    })(jQuery);
    </script>
    <?php } ?>
    <script>
     (function($) {

        $(window).scroll(function() {
            
            $('.animated-element').each(function(){
             
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
                if (imagePos < (topOfWindow + ($(window).height() -200))) { 
                    $(this).addClass("slideLeft");
                }
            });
        });
    })(jQuery);

    </script>



    <?php 
    // Asks W3C Total Cache plugin to move all JS and CSS assets to before body closing tag. It will help getting above 90 grade in google page speed.
    if(isset($mk_options['pagespeed-optimization']) and $mk_options['pagespeed-optimization'] != 'false' and defined('W3TC')) {
        echo "<!-- W3TC-include-js-head -->";
        echo "<!-- W3TC-include-css -->";
    }
    ?>

</footer>  
</body>
</html>