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
	<link href="<?php bloginfo("template_directory"); ?>/font-awesome/css/all.css" rel="stylesheet"> 

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
			        <ul class="navbar-nav ml-auto">
			            <li class="nav-item">
			                <a href="" class="nav-link">Peça seu Cartão de Cliente</a>
			            </li>
			            <li class="nav-item">
			                <a href="" class="nav-link boleto">Solicite a 2ª via do boleto</a>
			            </li>
			            <li class="nav-item">
			                <a href="" class="nav-link">Encontre uma loja</a>
			            </li>
			            <li class="nav-item">
			                <a href="" class="nav-link">Assine a newsletter</a>
			            </li>
			        </ul>
		            <!-- Pesquisa -->
		            <form id="busca" class="form-inline">
		                <input type="text" class="form-control" placeholder="Busca">
		                <button class="btn"><i class="fas fa-search"></i></button>
		            </form>
			    </nav>
			</div>
		</section>

	    <section id="menu-principal" class="container-fluid">
	    	<div class="container">
		        <nav class="navbar navbar-expand-lg navbar" style="z-index: 1;">
		            <!-- Logo -->
		            <div class="navbar-brand">
		                <h1 class="sr-only">Logo</h1>
		                <img id="logo" src="<?php bloginfo("template_directory") ?>/img/logo.png">
		            </div>

		            <!-- Botão menu mobile -->
		            <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#menu1">
		                <span class="navbar-toggler-icon d-flex align-items-center justify-content-end">
		                	<i class="fas fa-bars"></i>
		                </span>
		            </button>

		            <!-- Menu primário -->
		            <div class="collapse navbar-collapse" id="menu1">
		                <ul class="navbar-nav ml-auto">
		                    <li class="nav-item dropdown campanha">
		                        <a href="" class="nav-link dropdown-toggle" 
	                    data-toggle="dropdown">Campanhas</a>
			                    <div class="dropdown-menu">
			                        <a href="" class="dropdown-item">Verão Especial</a>
			                        <a href="" class="dropdown-item">Festa em Família no Fim de Ano</a>
			                        <a href="" class="dropdown-item">Alto Verão</a>
			                    </div>
		                    </li>
		                    <li class="nav-item feminino dropdown">
		                        <a href="" class="nav-link dropdown-toggle" 
	                    data-toggle="dropdown"">Feminino</a>
			                    <div class="dropdown-menu">
			                        <a href="" class="dropdown-item">Adulto</a>
			                        <a href="" class="dropdown-item">Tamanhos Grandes</a>
			                        <a href="" class="dropdown-item">Esporte</a>
			                        <a href="" class="dropdown-item">Langerie</a>
			                        <a href="" class="dropdown-item">Acessórios</a>
			                        <a href="" class="dropdown-item peca-cartao">Peça seu cartão</a>
			                    </div>
		                    </li>
		                    <li class="nav-item dropdown masculino">
		                        <a href="" class="nav-link dropdown-toggle" 
	                    data-toggle="dropdown"">Masculino</a>
			                    <div class="dropdown-menu">
			                        <a href="" class="dropdown-item">Adulto</a>
			                        <a href="" class="dropdown-item">Tamanhos Grandes</a>
			                        <a href="" class="dropdown-item">Esporte</a>
			                        <a href="" class="dropdown-item">Acessórios</a>
			                        <a href="" class="dropdown-item peca-cartao">Peça seu cartão</a>
			                    </div>
		                    </li>
		                    <li class="nav-item dropdown kids">
		                        <a href="" class="nav-link dropdown-toggle" 
	                    data-toggle="dropdown"">Kids</a>
			                    <div class="dropdown-menu">
			                        <a href="" class="dropdown-item">Bebê</a>
			                        <a href="" class="dropdown-item">Infantil</a>
			                        <a href="" class="dropdown-item">Juvenil</a>
			                    </div>
		                    </li>
		                    <li class="nav-item casa">
		                        <a href="" class="nav-link">Casa</a>
		                    </li>
		                    <li class="nav-item promocoes">
		                        <a href="" class="nav-link">Promoções</a>
		                    </li>
		                </ul>
		            </div>

		        </nav> 
		    </div>               
	    </section>
	</header>