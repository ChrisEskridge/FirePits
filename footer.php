<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OutdoorFirePits
 */

?>

	

	<footer id="site-footer">
        <div class="top-bar">
        </div>
        <div class="footer-header">
        
            <div class="footer-logo">
            <div class="logo-wrapper">
            <a class="black" href="<?php echo get_permalink(99); ?>http://outdoorfirepit.robertscreative.net">
                <img src="<?php bloginfo('template_directory'); ?>/images/white-logo.png" height="60px">
            </a>
            </div>
            </div><!-- .footer-logo -->
            
            <div class="footer-button">
            	<a class="white" href="<?php echo get_permalink(19); ?>">
                	<div class="order-now-button">
                        ORDER NOW
                    </div>
                </a>
            </div><!-- .footer-button -->
        </div>
        <div class="footer-contact">
            <div class="footer-address">
            	<div class="wrapper-address">
                <img class="phone-icon" src="<?php bloginfo('template_directory'); ?>/images/address.png" height="40px">
                <div class="number">
                	P.O. Box 1049 Laurel, MS 39441
                </div>
                </div>
            </div><!-- .footer-address -->
            <div class="footer-email">
            	<div class="wrapper-email">
            	<img class="phone-icon" src="<?php bloginfo('template_directory'); ?>/images/email.png" height="40px">
                <div class="number">
                	tamulloy@lmfco.com
                </div>
                </div>
            </div><!-- .footer-email -->
            <div class="footer-fax">
            	<img class="phone-icon" src="<?php bloginfo('template_directory'); ?>/images/fax.png" height="40px">
                <div class="number">
                	601.425.5617
                </div>
            </div><!-- .footer-fax -->
            <div class="footer-phone">
            	<img class="phone-icon" src="<?php bloginfo('template_directory'); ?>/images/phone.png" height="40px">
                <div class="number">
                	601.428.0541
                </div>
            </div><!-- .footer-phone -->
            
            
            
            
            
            
            
            
            
            
            
            
            
           
            
            
            
            
            
            
            <?php $social_query = new WP_Query(array( 'post_type' => 'page', 'page_id' => 5 )); ?>
        <?php if( $social_query->have_posts() ) : while( $social_query->have_posts() ) : $social_query->the_post(); ?>
		<?php if( have_rows('social_media') ): ?>
        	<div class="footer-sm">
            
            	<?php while ( have_rows('social_media') ) : the_row(); ?>
                	<?php if( get_row_layout() == 'facebook' ): ?>
                    	<a href="<?php the_sub_field('facebook_link'); ?>">
                			<img class="phone-icon1" src="<?php bloginfo('template_directory'); ?>/images/fb.png" width="100%">
                        </a>
                	<?php elseif( get_row_layout() == 'twitter' ): ?>
                    	<a href="<?php the_sub_field('twitter_link'); ?>">
                			<img class="phone-icon2" src="<?php bloginfo('template_directory'); ?>/images/twitter.png" width="100%">
                        </a>
                	<?php elseif( get_row_layout() == 'instagram' ): ?>
                    	<a href="<?php the_sub_field('instagram_link'); ?>">
                			<img class="phone-icon3" src="<?php bloginfo('template_directory'); ?>/images/insta.png" width="100%">
                        </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div><!-- .footer-sm -->
         <?php endif; ?>  
         <?php endwhile; ?>
		 <?php endif; ?>
            
            
            
            
            
        </div><!-- .footer-contact -->
	</footer><!-- #site-footer -->

</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
