<header class="banner o-header">
    
    <div class="container o-header__inner">
    
        <a class="brand o-header__logo" href="<?= esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>
        
        <nav class="nav-primary o-header__navigation">
            
            <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                endif;
            ?>

        </nav>

    </div>
    
</header>
