<!doctype html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php wp_head(); ?>

    </head>
    <body>
    <div class="container">
        <div class="row mb-5">
            <!-- Bootstrap Header Model -->
            <nav class="navbar navbar-light bg-light fixed-top px-5 py-3">
                <div class="container-fluid w-75">
                    <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span></button>
                    
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Portfolio's Task Menu</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <?php 
                            wp_nav_menu(
                                array(
                                    'menu' => 'main_nav',
                                    'menu_class' => 'navbar-nav',
                                    'theme_location' => 'primary',
                                    'container' => 'false',
                                    'walker' => new WP_Bootstrap_Navwalker()
                                )
                            ); 
                            ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>