<?php get_header(); ?>
	<!-- Conteúdo -->
	<main id="conteudo" class="position-relative">
		
		<!-- Capa -->
    	<section id="capa" class="container-fluid position-relative">

    		
			<!-- Carousel -->
    		<div id="carousel" class="container carousel slide" data-ride="carousel">

	            <ol class="carousel-indicators">

		            <li class="active" data-target="#carousel" data-slide-to="0"></li>

		            <li data-target="#carousel" data-slide-to="1"></li>

	            </ol>

	            <!--Slides -->
            	<div class="carousel-inner">
              
            		<div class="carousel-item active">
            			<img src="<?php bloginfo("template_directory") ?>/img/capa1.jpg" class="img-fluid d-none d-md-block">
            			<img src="<?php bloginfo("template_directory") ?>/img/capa1-mobile.jpg" class="img-fluid d-block d-md-none">
              		</div>

              		<div class="carousel-item">
                		<img src="<?php bloginfo("template_directory") ?>/img/capa2.jpg" class="img-fluid d-none d-md-block">
                		<img src="<?php bloginfo("template_directory") ?>/img/capa2-mobile.jpg" class="img-fluid d-block d-md-none">
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

   		<!-- Destaques -->

   		<section id="destaques" class="container">

   			<div class="card-columns">

			    <article class="card order-0">
			    	<img class="card-img-top d-none d-md-block" src="<?php bloginfo("template_directory"); ?>/img/destaque1.jpg">
			    	<img class="card-img-top d-block d-md-none" src="<?php bloginfo("template_directory"); ?>/img/destaque1-mobile.jpg">
			    	<a href="#" class="btn-adesao">
			    		<div class="card-footer">
			    			Preencha a proposta de adesão
			    		</div>
			    	</a>
			    </article>

			    <article class="card">
					<img class="card-img" src="<?php bloginfo("template_directory"); ?>/img/destaque2.jpg">
				    <div class="card-img-overlay topo-esquerda">
				    	<h6 class="card-subtitle">Beleza</h6>
					    <h4 class="card-title">Ruiva Fatal</h4>
					    <p class="card-text">Que o ruivo é o tom do momento todo mundo sabe.</p>
					    <a class="btn btn-logo" href="">Saiba mais</a>
				    </div>
			    </article>

			    <article class="card">
					<img class="card-img" src="<?php bloginfo("template_directory"); ?>/img/destaque4.jpg">
				    <div class="card-img-overlay centro-direita">
					    <h6 class="card-subtitle">Moda Logo</h6>
					    <h4 class="card-title">Paixão por Jeans</h4>
					    <p class="card-text">Versátil, combina com vários estilos diferentes.</p>
					    <a class="btn btn-logo" href="">Saiba mais</a>
				    </div>
			    </article>

			    <article class="card">
					<img class="card-img" src="<?php bloginfo("template_directory"); ?>/img/destaque3.jpg">
				    <div class="card-img-overlay baixo-centro">
					    <h4 class="card-title">Promoção Bob Esponja</h4>
					    <p class="card-text">Na compra de uma peça Bob Esponja, ganhe um brinde.</p>
					    <a class="btn btn btn-logo" href="">Continue lendo</a>
				    </div>
			    </article>

			    <article class="card">
					<img class="card-img" src="<?php bloginfo("template_directory"); ?>/img/destaque5.jpg">
				    <div class="card-img-overlay baixo-centro">
					    <h6 class="card-subtitle">Beleza</h6>
					    <h4 class="card-title">Poder Instantâneo</h4>
					    <p class="card-text">Batom vermelho deixa toda mulher poderosa.</p>
					    <a class="btn btn btn-logo" href="">Saiba mais</a>
				    </div>
			    </article>

			</div>
   			
   		</section>

   		<!-- Mapa -->
   		<section id="mapa" class="container-fluid">

	    <div id="floating-panel" class="row">
		    <div class="col-md-5">
		    	<div id="localizacao-atual" class="btn btn-logo">Achar minha localização automaticamente</div>
		    </div>
		    <div class="col-md-1 ou">
		    	<span>Ou</span>
		    </div>
		    <div class="col-md-6">
		    	<h6 class="title">Digite o CEP de onde você está</h6>
		    	<div class="input-group">
		    		<input id="address" type="text" placeholder="CEP" class="form-control">
		    		<div class="input-group-append">
		    			<input id="submit" class="btn btn-logo" type="button" value="Procurar">
		    		</div>
		    	</div>

		    </div>
		</div>
	    <div id="map"></div>
   			
   		</section>

   	</main>
<?php get_footer(); ?>