<?php
/**
 * Template Name: Custom Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

	<div class="o-header__outer">

		<?php get_template_part('templates/page', 'header'); ?>

	</div>

	<div class="o-content__outer">

		<?php get_template_part('templates/content', 'page'); ?>

	</div>
	
<?php endwhile; ?>
