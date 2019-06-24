<!DOCTYPE html>

<html>

<head>
	
	<!-- metas -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index, follow" />

	<!-- título -->
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

	<!-- estilos, bootstrap, fontes, etc -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link id="style-css" rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/style.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700|Maven+Pro:400,500,700,900&display=swap" rel="stylesheet">
	<link href="<?php bloginfo("template_directory"); ?>/ferramentas/font-awesome/css/all.css" rel="stylesheet"> 

    <!-- HTML5 shim e Respond.js para suporte aos elementos HTML5 e media queries no IE8 -->
    <!-- ATENÇÃO: Respond.js não funciona via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php wp_head(); ?>

</head>

<body>
	<header id="header">
		<section class="container-fluid estilo1" id="barra-topo">
			<div class="container">
			    <nav class="navbar navbar-expand">
			    	<!-- Menu secundário -->
		            <?php
                    wp_nav_menu( array(
                    'theme_location'    => 'menu2',
                    'depth'             => 1,
                    'container'         => 'ul',
                    'menu_class'        => 'navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
		            <!-- Pesquisa -->
		            <form id="busca" class="form-inline" role="search" method="get">
		                <input type="text" class="form-control" value="<?php the_search_query(); ?>" placeholder="Busca" name="s" id="s">
		                <button type="submit" class="btn" id="searchsubmit"><i class="fas fa-search"></i></button>
		            </form>
			    </nav>
			</div>
		</section>

	    <section id="menu-principal" class="container-fluid">
	    	<div class="container">
		        <nav class="navbar navbar-expand-lg navbar" style="z-index: 1;">
		            <!-- Logo -->
		            <div class="navbar-brand">
		            <a href="<?php bloginfo("url"); ?>">
		                <h1 class="sr-only"><?php bloginfo("name"); ?></h1>
		                <img id="logo" src="<?php bloginfo("template_directory") ?>/img/logo.png">
		            </a>
		            </div>

		            <!-- Botão menu mobile -->
		            <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#menu1">
		                <span class="navbar-toggler-icon d-flex align-items-center justify-content-end">
		                	<i class="fas fa-bars"></i>
		                </span>
		            </button>

					<!-- Menu primário -->
		            <?php
                    wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'menu1',
                    'menu_class'        => 'navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>

		        </nav> 
		    </div>               
	    </section>
	</header>