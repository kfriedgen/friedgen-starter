<div class="o-header__outer">

	<?php get_template_part('templates/page', 'header'); ?>

</div>

<?php if (!have_posts()) : ?>
	
	<div class="alert alert-warning u-alert u-alert__warning">

		<?php _e('Sorry, no results were found.', 'sage'); ?>
		
	</div>

	<div class="c-search__outer">

		<?php get_search_form(); ?>

	</div>

<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>

	<div class="c-search-content__outer">

		<?php get_template_part('templates/content', 'search'); ?>

	</div>

<?php endwhile; ?>

<div class="o-posts-navigation__outer">

	<?php the_posts_navigation(); ?>

</div>
