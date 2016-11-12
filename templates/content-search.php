<article <?php post_class(); ?>>

	<header class="c-search__header">
	
		<h2 class="entry-title c-search__h2">

			<a class="c-search__h2-a" href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>

		</h2>

		<div class="c-search__entry-meta">

			<?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
	
		</div>

	</header>
	
	<div class="entry-summary c-search__entry-summary">
		
		<?php the_excerpt(); ?>
	
	</div>
	
</article>
