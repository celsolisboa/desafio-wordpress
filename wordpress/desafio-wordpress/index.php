<?php get_header(); ?>

<main>

    <section id="blog-post">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/blog/blog-post.css">

        <div class="container-fluid">
            <div class="container p-0">
                <div class="d-flex flex-wrap justify-content-center align-items-start blog-content">
                    <div class="form-request d-flex flex-row justify-content-center align-items-end order-2 order-sm-2 order-md-2 order-lg-1">
                        <div class="fill-the-form d-flex flex-row justify-content-center align-items-center">
                            <a href="#">PREENCHA A PROPOSTA DE ADESÃO</a>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center align-items-center blog order-1 order-sm-1 order-md-1 order-lg-2">

                        <?php
                        query_posts( 'p=25' );
                        while ( have_posts() ) :
                            the_post();

                            $categories = get_the_category();
                            ?>
                            <div class="blog-post-1 post d-flex flex-row justify-content-start align-items-start" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>);">
                                <div class="post-info">
                                    <h3><?php
                                    if ( ! empty( $categories ) ) {
                                        echo esc_html( $categories[0]->name );
                                    }
                                    ?></h3>
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <p><?php echo get_the_content(); ?></p>
                                    <a href="<?php echo get_the_permalink(); ?>" class="blog-post-button">SAIBA MAIS</a>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        ?>
                        <?php
                        query_posts( 'p=28' );
                        while ( have_posts() ) :
                            the_post();

                            $categories = get_the_category();
                            ?>
                            <div class="blog-post-2 post d-flex flex-row justify-content-center align-items-end">
                                <div class="post-info">
                                    <h3><?php
                                    if ( ! empty( $categories ) ) {
                                        echo esc_html( $categories[0]->name );
                                    }
                                    ?></h3>
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <p><?php echo get_the_content(); ?></p>
                                    <a href="<?php echo get_the_permalink(); ?>" class="blog-post-button">SAIBA MAIS</a>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        ?>
                        <?php
                        query_posts( 'p=33' );
                        while ( have_posts() ) :
                            the_post();

                            $categories = get_the_category();
                            ?>
                            <div class="blog-post-3 post d-flex flex-row justify-content-end align-items-center">
                                <div class="post-info">
                                    <h3><?php
                                    if ( ! empty( $categories ) ) {
                                        echo esc_html( $categories[0]->name );
                                    }
                                    ?></h3>
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <p><?php echo get_the_content(); ?></p>
                                    <a href="<?php echo get_the_permalink(); ?>" class="blog-post-button">SAIBA MAIS</a>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        ?>
                        <?php
                        query_posts( 'p=35' );
                        while ( have_posts() ) :
                            the_post();

                            $categories = get_the_category();
                            ?>
                            <div class="blog-post-4 post d-flex flex-row justify-content-center align-items-end">
                                <div class="post-info">
                                    <h3><?php
                                    if ( ! empty( $categories ) ) {
                                        echo esc_html( $categories[0]->name );
                                    }
                                    ?></h3>
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <p><?php echo get_the_content(); ?></p>
                                    <a href="<?php echo get_the_permalink(); ?>" class="blog-post-button">SAIBA MAIS</a>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="map">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/map/map.css">

        <div class="container-fluid">
            <div class="container p-0">

                <div class="map-box d-flex flex-row justify-content-center align-items-center">
                    <div class="dialog d-flex flex-column flex-sm-column flex-md-column flex-lg-row justify-content-center align-items-center">
                        <div class="d-flex flex-column flex-sm-column flex-md-column flex-lg-row justify-content-center align-items-center">
                            <div class="">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/find-my-localization.jpg" alt=""></a>
                            </div>
                            <div class="or">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map/dialog-icon.png" alt="">
                            </div>
                        </div>
                        <div class="">
                            <h2>DIGITE O CEP DE ONDE VOCÊ ESTÁ</h2>
                            <div class="cep-box d-flex flex-row justify-content-center align-items-center">
                                <div class="cep">
                                    <input type="text" name="" value="CEP">
                                </div>
                                <div class="submit">
                                    <input type="submit" name="" value="PROCURAR">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="newsletter">

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/newsletter/newsletter.css">

        <div class="container-fluid">
            <div class="container p-0">

                <div class="row p-0">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0 d-flex flex-wrap justify-content-start align-items-center signin">
                        <div class="">
                            <h2>ASSINE A NEWSLETTER DO LOGO</h2>
                            <div class="signin-box d-flex flex-row justify-content-center align-items-center">
                                <div class="email">
                                    <input type="text" name="" value="Seu e-mail">
                                </div>
                                <div class="submit">
                                    <input type="submit" name="" value="ENVIAR">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0 d-flex flex-row justify-content-start align-items-center share">
                        <div class="share-box">
                            <h2>SIGA LOJAS LOGO NAS REDES SOCIAIS</h2>
                            <div class="share-icons">
                                <ul class="d-flex flex-row justify-content-start align-items-center">
                                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-facebook-icon.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-youtube-icon.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-instagram-icon.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>
