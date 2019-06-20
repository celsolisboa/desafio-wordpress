<?php get_header(); ?>
	<!-- Conteúdo -->
	<main id="conteudo" class="position-relative">
		<!-- Capa -->
    	<section id="capa" class="container-fluid position-relative">

    		
			<!-- Capa -->
    		<div id="carousel" class="container carousel slide" data-ride="carousel">

	            <ol class="carousel-indicators">

		            <li class="active" data-target="#carousel" data-slide-to="0"></li>

		            <li data-target="#carousel" data-slide-to="1"></li>

	            </ol>

	            <!--Slides -->
            	<div class="carousel-inner">
              
            		<div class="carousel-item active">
            			<img src="<?php bloginfo("template_directory") ?>/img/destaque.jpg" class="img-fluid d-none d-md-block">
            			<img src="<?php bloginfo("template_directory") ?>/img/destaque1-mobile.jpg?v=2" class="img-fluid d-block d-md-none">
              		</div>

              		<div class="carousel-item">
                		<img src="<?php bloginfo("template_directory") ?>/img/destaque2.jpg" class="img-fluid d-none d-md-block">
                		<img src="<?php bloginfo("template_directory") ?>/img/destaque2-mobile.jpg?v=2" class="img-fluid d-block d-md-none">
              		</div>

            	</div>
            
            	<!-- Controles -->
            	<div id="controles-carousel" class="container position-absolute">
	            	<a href="#carousel" class="carousel-control-prev" data-slide="prev">
	              		<span class="carousel-control-prev-icon">
	              		</span>
	            	</a>

	            	<a href="#carousel" class="carousel-control-next" data-slide="next">
	              		<span class="carousel-control-next-icon">
	              		</span>
	            	</a>
            	</div>

        	</div>

   		</section>

   	</main>
<?php get_footer(); ?>