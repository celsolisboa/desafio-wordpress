	<footer id="footer" class="container-fluid">
		
		<section class="container" id="footer-1">

			<div class="row">
				<div class="col-md-6 newsletter">
					<h6 class="title">Assine a newsletter do logo</h6>
                    <div class="input-group">
                        <input class="form-control" name="email-newsletter" type="text" placeholder="Seu email">
                        <div class="input-group-append">
                            <button class="btn btn-logo">
                            	Enviar
                            </button>
                        </div>
                    </div>
				</div>
				<div class="col-md-6 redes-sociais">
					<h6 class="title">Siga Lojas Logo nas redes sociais</h6>
					<button class="btn btn-logo facebook">
                    	<i class="fab fa-facebook-f"></i>
                    </button>
                    <button class="btn btn-logo youtube">
                    	<i class="fab fa-youtube"></i>
                    </button>
                    <button class="btn btn-logo instagram">
                    	<i class="fab fa-instagram"></i>
                    </button>
				</div>
			</div>
			
		</section>

		<section class="container-fluid" id="footer-2">

			<div class="container menu-rodape">
			<?php
			//Nomes dos menus
			$locations = get_nav_menu_locations(); 
			$menu_footer1 = wp_get_nav_menu_object($locations['footer1']);
			$menu_footer2 = wp_get_nav_menu_object($locations['footer2']);
			?>

				<div class="row">
					<div class="col-md-4 col-lg-3 col-xl-2 lojas-logo">
						<h6 class="title"><?php echo $menu_footer1->name; ?></h6>
			            <?php
	                    wp_nav_menu( array(
	                    'theme_location'    => 'footer1',
	                    'depth'             => 1,
	                    'container'         => 'ul',
	                    'menu_class'        => 'list-group',
	                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	                    'walker'            => new WP_Bootstrap_Navwalker(),
	                    ) );
	                    ?>
					</div>
					<div class="col-md-4 col-lg-3 col-xl-2 lista-atalhos">
						<h6 class="title"><?php echo $menu_footer2->name; ?></h6>
			            <?php
	                    wp_nav_menu( array(
	                    'theme_location'    => 'footer2',
	                    'depth'             => 1,
	                    'container'         => 'ul',
	                    'menu_class'        => 'list-group',
	                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	                    'walker'            => new WP_Bootstrap_Navwalker(),
	                    ) );
	                    ?>
					</div>
					<div class="col-md-4 col-lg-3 col-xl-2 sac">
						<div class="row" style="white-space: nowrap;">
							<div class="col-12 col-md-6">
								Sac Loja Logo
							</div>
							<div class="col-12 col-md-6">
								0800-701-0316
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-md-10">
								<a href="#">
								<div class="btn btn-logo">
									Solicitar 2ª via do boleto
								</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="row copyright">
					<div class="col-md-12 col-lg-9 col-xl-6">
						2015, Lojas Logo. Todos os direitos reservados.
					</div>
				</div>

			</div>
			
		</section>

	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php bloginfo("template_directory") ?>/ferramentas/jquery-mask.js"></script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsGu7Dht6dnji4N4Yf6-RmEiPmaiF1koU&callback=initMap">
    </script>
	<script type="text/javascript" src="<?php bloginfo("template_directory") ?>/js.js"></script>
	<?php wp_footer(); ?>  
</body>

</html>