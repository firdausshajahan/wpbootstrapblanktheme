<?php get_header(); 

/* Template Name: Full Width Page */

?>

<div class="container">
	<div class="row">
		
	  	<div class="content">
		  	<div class="col-md-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
				  	<?php the_content(); ?>

				<?php endwhile; else: ?>
					<p><?php _e('Sorry, this page does not exist.'); ?></p>
				<?php endif; ?>

		  </div>
		</div>
	</div>
</div>

<?php get_footer(); ?>