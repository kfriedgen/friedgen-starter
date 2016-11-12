<div class="o-header__outer">

	<?php get_template_part('templates/page', 'header'); ?>

</div>

<div class="o-posts__outer">

	<div class="o-posts__no-results">

		<?php if (!have_posts()) : ?>

			<div class="alert alert-warning u-alert u-alert__warning">
				
				<?php _e('Sorry, no results were found.', 'sage'); ?>
			
			</div>

			<div class="c-search__outer">
		  
				<?php get_search_form(); ?>

			</div>

		<?php endif; ?>

	</div>

	<div class="o-posts__inner">

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

		<?php endwhile; ?>

	</div>

</div>

<div class="o-posts-navigation__outer">

	<?php the_posts_navigation(); ?>

</div>
