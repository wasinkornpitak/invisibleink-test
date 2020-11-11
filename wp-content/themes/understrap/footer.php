<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
    <div class="logo-footer">
        <img src="<?php echo get_template_directory_uri()?>/img/logo-footer.svg" alt="">
    </div>
    <div id="footer-detail">
        <div id="footer-address">
			<span>Swainson Wellness<br/>725/4 Thonglor<br/>Bangkok 10110<br/>Thailand</span>
		</div>
		<div id="footer-email">
            <a href="#">info@swainsonwellness.com</a>
		</div>
		<div id="footer-tel">
			<span>+66 (0) 2999 9999</span>
		</div>
		<div id="directions">
            <a href="#">Get directions</a>
        </div>
        <div id="open-days">
			<span>Open 7 days a week<br/>9am - 8pm</span>
        </div>
        <div id="copy-right">
			<span>Swainson Wellness © 2020. All rights reserved. </span>
        </div>
        <div id="facebook">
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <div id="twitter">
            <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
        <div id="instagram">
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

