<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OutdoorFirePits
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
​
  ga('create', 'UA-71655251-1', 'auto');
  ga('send', 'pageview');
​
</script>
</head>

<body <?php body_class(); ?>>
<div id="page">
	

	<header id="site-header">
		<div class="header-contact">
        <?php $social_query = new WP_Query(array( 'post_type' => 'page', 'page_id' => 5 )); ?>
        <?php if( $social_query->have_posts() ) : while( $social_query->have_posts() ) : $social_query->the_post(); ?>
		<?php if( have_rows('social_media') ): ?>
        	<div class="header-contact-sm">
            
            	<?php while ( have_rows('social_media') ) : the_row(); ?>
                	<?php if( get_row_layout() == 'facebook' ): ?>
                    	<a href="<?php the_sub_field('facebook_link'); ?>">
                			<img class="phone-icon" src="<?php bloginfo('template_directory'); ?>/images/fb.png" width="100%">
                        </a>
                	<?php elseif( get_row_layout() == 'twitter' ): ?>
                    	<a href="<?php the_sub_field('twitter_link'); ?>">
                			<img class="phone-icon" src="<?php bloginfo('template_directory'); ?>/images/twitter.png" width="100%">
                        </a>
                	<?php elseif( get_row_layout() == 'instagram' ): ?>
                    	<a href="<?php the_sub_field('instagram_link'); ?>">
                			<img class="phone-icon" src="<?php bloginfo('template_directory'); ?>/images/insta.png" width="100%">
                        </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div><!-- .header-contact-sm -->
         <?php endif; ?>  
         <?php endwhile; ?>
		 <?php endif; ?>
          
            
            <div class="header-contact-phone">
            	<img class="phone-icon" src="<?php bloginfo('template_directory'); ?>/images/phone.png" width="100%">
                <div class="number">
                601.428.0541
                </div>
            	
            </div>
		</div><!-- .header-contact -->

		<nav class="site-navigation">
			<!--<div class="small-menu">
            	<a href="<?php echo get_permalink(99); ?>http://ljcdyb.signmeupcoach.com/login/">
                	<img class="menu-icon" src="<?php bloginfo('template_directory'); ?>/images/140272627-grooming-needs-senior-cat-632x475.jpg">
                </a>
                <a href="<?php echo get_permalink(99); ?>http://ljcdyb.signmeupcoach.com/login/">
                	<span class="menu-font">
                    	MENU
                    </span>
                </a>
            </div>  
            <div class="drop-down">
            	<a href="<?php echo get_permalink(99); ?>http://ljcdyb.signmeupcoach.com/registration/">
                	<div class="drop-down-register">
                    	REGISTER
                    </div>
                </a>
                <a href="<?php echo get_permalink(99); ?>http://ljcdyb.signmeupcoach.com/#content-wrapper">
                	<div class="drop-down-about">
                    	ABOUT
                    </div>
                </a>
                <a href="<?php echo get_permalink(99); ?>http://ljcdyb.signmeupcoach.com/#contact-wrapper">
                	<div class="drop-down-contact">
                    	CONTACT
                    </div>
                </a>
            </div>-->
            <div class="nav-menu">
            	<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </div>
		</nav><!-- .site-navigation -->
        
        <div class="header-title">
        	<a class="black" href="<?php echo get_permalink(5); ?>">
        	<div class="header-image">
            	<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" height="60px">
            </div>
            </a>
            <div class="header-text">
        		Outdoor Fire Pits
            </div>
        </div><!-- .header-title -->
	</header><!-- #site-header -->
