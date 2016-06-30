<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div class="container-outer"><!-- CONTAINER-OUTER -->
	
	<div class="clear padding20"></div>
        
        <?php while(have_posts()) { 
            the_post(); 
        ?>
	<!-- Content -->
	<section class="container clearfix">
 


        <h2><?php the_title(); ?>
            <div class="dot-line-center"><br></div></h2>

            <div class="clear padding10"></div>
	
            <div class="wg_content">
            <?php the_content(); ?>
            </div>

	</section>
  <div class="clear padding80"></div>
        <?php } ?>
	<!-- /Content -->
		
    </div><!-- END CONTAINER-OUTER -->

<?php get_footer(); ?>
