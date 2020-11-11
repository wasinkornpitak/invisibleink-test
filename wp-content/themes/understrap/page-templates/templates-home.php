<?php
/**
 * Template Name: Templates : Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

    <session class="content">
        <div id="content-detail">
            <div id="brand-mark">
                <!-- <img src="<?php echo get_template_directory_uri()?>/img/brand-mark.svg" alt=""> -->
            </div>
    
            <div id="detail">
                <span>A more personalised <br/>state of well-being.</span>
                <div id="sub-detail">
                    <span>Get ready to put in the work and welcome to <br/>a new kind of boutique wellness experience. <br/><br/>Whether you’re looking for a fresh start, or <br/>you’re already on your journey. Our bespoke <br/>solutions are made to deliver results that <br/>revolve around you and your wellness goals.</span>
                </div>
                <button id="btn-leran-more">Learn more</button>
            </div>
        </div>

    </session>

    <session class="offer">
        <div id="offer-derail">
            <div id="offer-title">
				<span>Our offering</span>
            </div>
            <div class="row">
                <div class="card">
                    <img class="card-img" src="<?php echo get_template_directory_uri()?>/img/fitness.png" alt="">
                    <h2>Fitness</h2>
                    <p>Our workout studio is equipped with serious machinery and classes designed to unlock your full potential.</p>
                </div>
                <div class="card">
                    <img class="card-img" src="<?php echo get_template_directory_uri()?>/img/yoga.png" alt="">
                    <h2>Yoga</h2>
                    <p>Expand, contract, find your breath, and feel it flow with our wide range of yoga classes.</p>
                </div>
                <div class="card">
                    <img class="card-img" src="<?php echo get_template_directory_uri()?>/img/spa.png" alt="">
                    <h2>Spa</h2>
                    <p>Hit pause. Let go. Recharge with our invigorating collection of spa services, experiences & treatments.</p>
                </div>

            </div>
        </div>
    </session>

    <session class="contact">
        <div id="contact-detail">
            <div id="contact-title">
                <h2>Be the first to</h2>
                <p>Sign up to get the latest news, learn more about our wellness experience and receive details on how to become a member.</p>
            </div>
            <div id="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="40" title="Newsletter singup homepage"]');?>
            </div>
        </div>
    </session>
<?php
get_footer();
