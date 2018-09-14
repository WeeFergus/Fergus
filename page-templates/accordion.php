<?php
/**
 * Template Name: Accordion
 *
 * @package fergus
 */
 
get_header(); ?>

<main>
	<section class="accord">
		<?php
			if( have_rows('accordion') ): ?>
				<div id="accordion">
			 	 	<?php while ( have_rows('accordion') ) : the_row(); ?>
			 	 		<div class="accordion">
				 	 		<a class="accordion-section-title" href="#"><?php the_sub_field('section_title'); ?></a>
			 	 			<div class="accordion-section-content">
			 	 				<?php the_sub_field('sub_item'); ?>
			 	 			</div>	
				 	 	</div> 
				 	<?php endwhile;
				else :
			endif;
		?>
	</section>
</main>

<?php get_footer(); ?>

</body>
</html>