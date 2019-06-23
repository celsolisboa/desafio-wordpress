<!doctype html>
<html <?php language_attributes(); ?> lang="pt-br">
<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/OwlCarousel2-2-3-4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/OwlCarousel2-2-3-4/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700|Montserrat:400,700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>

    <header>

        <div class="d-block d-sm-block d-md-block d-lg-none">

            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/header/mobile.css">

            <div class="mobile">

                <nav class="navbar navbar-expand-lg navbar-dark ">

                    <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarsExampleDefault">
                        <?php preMobileMenu(); ?>
                        <form class="form-inline">
                            <div class="buscar mr-auto">
                                <input class="" type="text" placeholder="Buscar" aria-label="Buscar" value="Buscar">
                            </div>
                            <div class="submit">
                                <button class="" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pre-header/search-icon.png" class="img-fluid" alt="..."></button>
                            </div>
                        </form>
                    </div>
                </nav>

                <div class="owl-carousel owl-mobile owl-theme owl-loaded owl-drag">
                    <?php
                    query_posts( 'post_type=banner' );
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <div class="item"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" class="img-fluid " alt="..."></div>
                        <?php
                    endwhile;
                    ?>
                </div>

            </div>
        </div>

        <div class="container-fluid p-0 pre-hero d-none d-sm-none d-md-none d-lg-block">

            <div class="pre-header">

                <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/header/pre-header.css">

                <nav class="navbar p-0">

                    <div class="container p-0 d-flex flex-row justify-content-end align-items-center">
                        <?php preHeaderMenu(); ?>
                        <?php get_search_form(); ?>
                    </div>
                </nav>
            </div>

            <div class="">

                <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/header.css">

                <div class="owl-carousel owl-hero owl-theme owl-loaded owl-drag">
                    <?php
                    query_posts( 'post_type=banner' );
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <div class="item"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" class="img-fluid " alt="..."></div>
                        <?php
                    endwhile;
                    ?>
                </div>
                <div class="container p-0 pos-hero d-none d-sm-none d-md-none d-lg-flex flex-row justify-content-center align-items-center">
                    <div class="logo mr-auto">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo"></a>
                    </div>
                    <div class="menu-box">
                        <?php
                        wp_nav_menu(
                            array(
                                'menu' => 'main-menu',
                                'theme_location' => 'primary',
                                'menu_class' => 'menu d-flex flex-row justify-content-end align-items-center',
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
