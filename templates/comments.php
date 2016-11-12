<?php
    if (post_password_required()) {
      return;
    }
?>

<section id="comments" class="comments c-comments">
    
    <?php if (have_comments()) : ?>
    
        <h2 class="c-comments__h2">
            <?php printf(_nx('One response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?>            
        </h2>

        <ol class="comment-list c-comments__ol">
          
            <?php wp_list_comments(['style' => 'ol', 'short_ping' => true]); ?>
        
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            
            <nav class="c-comments__nav">

                <ul class="pager c-comments__ul">
                
                    <?php if (get_previous_comments_link()) : ?>
                        
                        <li class="previous c-comments__previous">
                            <?php previous_comments_link(__('&larr; Older comments', 'sage')); ?>
                        </li>
                    
                    <?php endif; ?>
                    
                    <?php if (get_next_comments_link()) : ?>
                        
                        <li class="next c-comments__next">
                            <?php next_comments_link(__('Newer comments &rarr;', 'sage')); ?>
                        </li>
                    
                    <?php endif; ?>

                </ul>

            </nav>

        <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')) : ?>
        
        <div class="alert alert-warning u-alert u-alert__warning">
            
            <?php _e('Comments are closed.', 'sage'); ?>
        
        </div>
    
    <?php endif; ?>

    <div class="c-comments__form">

        <?php comment_form(); ?>

    </div>
    
</section>
