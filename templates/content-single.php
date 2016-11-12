<?php while (have_posts()) : the_post(); ?>
    
    <article <?php post_class(); ?>>
    
        <header class="c-single-post__header">
            
            <h1 class="entry-title c-single-post__entry-title">
                <?php the_title(); ?>
            </h1>

            <div class="c-single-post__entry-meta">

                <?php get_template_part('templates/entry-meta'); ?>

            </div>
        
        </header>

        <div class="entry-content c-single-post__entry-content">
        
            <?php the_content(); ?>
        
        </div>

        <footer class="c-single-post__footer">
            
            <?php wp_link_pages(['before' => '<nav class="page-nav c-single-post__footer-navigation"><p class="c-single-post__footer-navigation-p">' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        
        </footer>

        <div class="c-single-post__comments">
        
            <?php comments_template('/templates/comments.php'); ?>

        </div>

    </article>
    
<?php endwhile; ?>
