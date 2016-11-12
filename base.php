<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>

<html <?php language_attributes(); ?>>
    
    <div class="o-head__outer">

        <?php get_template_part('templates/head'); ?>

    </div>

    <div class="o-body__outer">

        <body <?php body_class(); ?>>
            
            <!--[if IE]>
            <div class="alert alert-warning u-alert u-alert__warning">
                <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
            </div>
            <![endif]-->

            <div class="o-header__outer">

                <?php
                    do_action('get_header');
                    get_template_part('templates/header');
                ?>

            </div>
            
            <div class="wrap container o-container o-wrap" role="document">
                
                <div class="content row o-row o-content">
                
                    <main class="main o-main">
                        
                        <?php include Wrapper\template_path(); ?>

                    </main><!-- /.main -->

                    <?php if (Setup\display_sidebar()) : ?>
                    
                        <aside class="sidebar o-sidebar">
                    
                            <?php include Wrapper\sidebar_path(); ?>
                    
                        </aside><!-- /.sidebar -->

                    <?php endif; ?>

                </div><!-- /.content -->

            </div><!-- /.wrap -->

            <div class="o-footer__outer">

                <?php
                    do_action('get_footer');
                    get_template_part('templates/footer');
                    wp_footer();
                ?>
            </div>
            
        </body>

    </div>

</html>
