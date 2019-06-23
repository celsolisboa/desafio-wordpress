<footer>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/footer.css">

	<div class="container-fluid p-0">
		<div class="container p-0">

			<div class="row p-0">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0 order-2 order-sm-2 order-md-2 order-lg-1">
					<div class="footer-menu">
						<div class="d-flex flex-column flex-sm-column flex-md-column flex-lg-row justify-content-start align-items-start">
							<div class="logo-store">
								<h2>LOJAS LOGO</h2>
								<?php
								wp_nav_menu(
									array(
										'menu' => 'lojas-logo',
										'theme_location' => 'primary',
										'menu_class' => '',
									)
								);
								?>
							</div>
							<div class="list-shortcut">
								<h2>LISTA DE ATALHOS</h2>
								<?php
								wp_nav_menu(
									array(
										'menu' => 'lista-de-atalhos',
										'theme_location' => 'primary',
										'menu_class' => '',
									)
								);
								?>
							</div>
							<div class="sac">
								<div class="">
									<h2><span class="sac-logo">SAC LOJA LOGO</span><span class="telefone">0800-701-0316</span></h2>
								</div>
								<div class="footer-boleto">
									<a href="<?php echo get_home_url(); ?>/solicite-a-2a-via-do-boleto/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-boleto.jpg" class="img-fluid" alt=""></a>
								</div>
							</div>
						</div>
						<div class="copyright">
							2015, Lojas Logo. Todos os direitos reservados.
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0 order-1 order-sm-1 order-md-1 order-lg-2">
					<div class="footer-dinner">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-dinner.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery/jquery-3.4.1.slim.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/OwlCarousel2-2-3-4/owl.carousel.min.js" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/header/mobile-banner.js" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/header/banner.js" charset="utf-8"></script>
<?php wp_footer(); ?>
</body>
</html>
