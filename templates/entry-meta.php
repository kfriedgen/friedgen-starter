<div class="c-entry-meta">

	<time class="updated c-entry-meta__time" datetime="<?= get_post_time('c', true); ?>">
		
		<?= get_the_date(); ?>

	</time>

	<p class="byline author vcard c-entry-meta__p">

		<?= __('By', 'sage'); ?> 
		
		<a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn c-entry-meta__a">
			<?= get_the_author(); ?>
		</a>

	</p>

</div>