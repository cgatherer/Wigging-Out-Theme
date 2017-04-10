<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wigging_out
 */

get_header(); ?>

<section class="cd-intro parallax banner">

 	<div class="container banner-content">
 		<div class="row">
 			<div class="col-md-6 banner-news">
 				<?php $query = new WP_Query( 'cat=4' ); ?>
 				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
 					<div class="banner-news_post">
 						<h2><?php the_title(); ?></h2>
 						<h3 class="banner-news_secondary_headline"><?php 
 								$value = get_field( "secondary_headline" );
 								if( $value ) {
    								echo $value;
								} else {
    								echo 'empty';
    							} 
 							?></h3>

  						<div>
  							<?php the_content(); ?>
  						</div>
  						
  						<div class="row">
      						<div class="col-md-6 banner-news_button_container">
        						<a href="<?php the_permalink() ?>" class="banner-news_first_button">What do I get?</a>
      						</div>
      						<div class="col-md-6 banner-news_button_container">
        						<a href="<?php the_permalink() ?>" class="banner-news_second_button">Learn More</a>
      						</div>
    					</div>
    					
 					</div> <!-- closes the first div box -->

 					<?php endwhile; 
 					wp_reset_postdata();
 					else : ?>
 						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
 				<?php endif; ?>
 			</div>
 			<div class="col-md-6 banner-form">
 				<div class="banner-form_contact">
 					<p><i class="fa fa-home" aria-hidden="true"></i> Contact us for a free quote!</p>
 				</div>
 				<div class="banner-form_form">
 					<h3>Starting at <span>$36.99/mo</span></h3>
 					<p class="disclaimer">36-month monitoring contract required. Termination fee applies. For full terms and conditions <a href="#">click here.</a></p>
 					<?php echo do_shortcode('[contact-form-7 id="37" title="contact form"]');?>
 				</div>
 			</div>
 		</div>
 	</div>
 	
</section>

<main class="cd-main-content">
	<div class="cd-container">
		
			<div class="row">
				<!-- feature content -->
				<div class="col-md-6 wow animated fadeInRight home-content">
					<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'page' );
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile; // End of the loop.
					?>
				</div>
				
				<!-- feature image -->
				<div class="col-md-6 feature-2-pic wow animated fadeInLeft">
					<?php the_post_thumbnail('full'); ?>
				</div>	
			</div>
			
	</div>
	<div class="row home-form">
		<?php
		$value  = get_field( "headline_one" );
		$value2 = get_field( "headline_two" );
		$value3 = get_field( "headline_paragraph" );
    	
    		echo '<h3>' . $value . '</h3>';
    		echo '<h4>' . $value2 . '</h4>';
    		echo '<p>' . $value3 . '</p>';
    	?>
        <a href="<?php the_permalink() ?>" class="home-form_first_button ">Learn More</a>
	</div>
	
</main><!-- #main -->

<?php get_footer();?>
