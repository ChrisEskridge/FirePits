<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OutdoorFirePits
 */

get_header(); ?>

<div id="content-area">
  <div class="content-image">
    <div class="slider-wrapper"> <?php echo do_shortcode('[soliloquy id="40"]'); ?>
      <div class="content-image-text-wrapper">
        <div class="content-image-text">
          <h1 class="welcome">
            <?php the_field('slider_headline');?>
          </h1>
          <br>
          <span class="text">
          <?php the_field('slider_text');?>
          </span> </div>
        <!-- .content-image-text --> 
      </div>
    </div>
  </div>
  <!-- .content-image -->
  
  <div class="orange-box">
    <div class="orange-box-text">
      <?php the_field('orange_bar_text');?>
    </div>
    <!-- .orange-box-text -->
    <div class="orange-box-button"> <a class="white" href="<?php echo get_permalink(19); ?>">
      <div class="order-now-button"> ORDER NOW </div>
      </a> </div>
    <!-- .orange-box-button --> 
  </div>
  <!-- .orange-box -->
  <div class="gallery">
    <div class="header"> GALLERY </div>
    <div class="bank">
      <div class="gallery-slider"> <?php echo photo_gallery(1); ?> </div>
    </div>
  </div>
  <!-- .gallery -->
  <div id="styles">
    <div class="header"> STYLES </div>
    <div class="styles-wrapper">
      <div class="classic-wrapper">
        <div class="inside-header-2-line"> CLASSIC STYLE<BR>
          FOR BRICK OR CONCRETE SURFACES </div>
        <div class="inside-header-image1"> </div>
        <div class="bank-line">
          <div class="slider1">
            <div class="accessories-image"> <img class="classic-image" src="<?php bloginfo('template_directory'); ?>/images/classic.png" width="100%"> </div>
            <div class="accessories-text">
              <div class="thirty"> 30"<br>
                <br>
                Shipping Dimensions: 41"x17"<br>
                <br>
                Weight: 118lbs<br>
                <br>
                Cost: $545.00 </div>
              <div class="thirty-six" style="margin-top:10px;"> 36"<br>
                <br>
                Shipping Dimensions: 47"x18"<br>
                <br>
                Weight: 140lbs<br>
                <br>
                Cost: $585.00 </div>
            </div>
            <div class="safty-info"> DO NOT PLACE CLASSIC STYLE FIREPIT NEAR COMBUSTIBLE SURFACES </div>
          </div>
        </div>
      </div>
      <div class="classic-wrapper">
        <div class="inside-header-2-line"> WAVE STYLE<BR>
          FOR WOOD SURFACES </div>
        <div class="inside-header-image2"> </div>
        <div class="bank">
          <div class="slider1">
            <div class="accessories-image"> <img class="classic-image" src="<?php bloginfo('template_directory'); ?>/images/wave.png" > </div>
            <div class="accessories-text">
              <div class="thirty"> 30"<br>
                <br>
                Shipping Dimensions: 41"x20.125""<br>
                <br>
                Weight: 155 lbs<br>
                <br>
                Cost: $615.00 </div>
              <div class="thirty-six" style="margin-top:10px;"> 36"<br>
                <br>
                Shipping Dimensions: 47"x21.125"<br>
                <br>
                Weight: 195lbs<br>
                <br>
                Cost: $655.00 </div>
            </div>
            <div class="safty-info"> SAFE FOR USE NEAR COMBUSTIBLE SURFACES </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- .styles -->
  <div id="accessories">
    <div class="header"> ACCESSORIES </div>
    <div class="styles-wrapper">
      <div class="classic-wrapper">
        <div class="inside-header"> CARBON STEEL GRILL TOP </div>
        <div class="inside-header-image3"> </div>
        <div class="bank-line">
          <div class="slider2">
            <div class="accessories-image"> <img class="classic-image" src="<?php bloginfo('template_directory'); ?>/images/grill-top2.png" > </div>
            <div class="accessories-text">
              <div class="text-wrapper"> 30"<br>
                <br>
                Carbon Steel Grill Top<br>
                <br>
                Just add charcoal or wood, and turn your firepit into a huge outdoor grill.<br>
                <br>
                Price: $150.00 per half </div>
            </div>
          </div>
        </div>
      </div>
      <div class="classic-wrapper">
        <div class="inside-header"> ALUMINUM COVER </div>
        <div class="inside-header-image4"> </div>
        <div class="bank">
          <div class="slider2">
            <div class="accessories-image"> <img class="classic-image" src="<?php bloginfo('template_directory'); ?>/images/solid-top.png"> </div>
            <div class="accessories-text">
              <div class="text-wrapper"> 30"<br>
                <br>
                Aluminum Firepit Cover<br>
                <br>
                Shiny aluminum cover protects your firepit from the elements. Doubles as a table. Slightly tapered to drain water away.<br>
                <br>
                Price: $150.00 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- .accessories --> 
</div>
<!-- #content-area -->

<?php

get_footer();

