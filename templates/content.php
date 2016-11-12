<article <?php post_class(); ?>>
	
	<header class="o-content__header">
		
		<h2 class="entry-title o-content__h2">
			
			<a class="o-content__h2-a" href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>

		</h2>

		<?php get_template_part('templates/entry-meta'); ?>

	</header>

	<div class="entry-summary o-content__entry-summary">
		
		<?php the_excerpt(); ?>

	</div>
	
</article>
