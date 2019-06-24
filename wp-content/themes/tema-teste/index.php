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
						<!-- Slide 1 -->
						<?php
							$query_capa1 = array(
								'post_type' => 'post',
								'meta_query' => array(
						        	array(
						            	'key'       => 'wpcf-destaque',
						            	'value'     => 'capa1',
						            	'compare'   => '='
						        	)
						    	), 
						    	'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
							$loop_capa1 = new WP_Query( $query_capa1 );
							if ( $loop_capa1->have_posts() ) {
							while ( $loop_capa1->have_posts() ) {
							$loop_capa1->the_post();
							$thumb_capa1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'capa');
							$src_capa1 = $thumb_capa1['0'];
							$thumb_capa1_m = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'capa-mobile');
							$src_capa1_m = $thumb_capa1_m['0'];
							$post_capa1 = $post->ID;
						?>
            			<a href="<?php the_permalink(); ?>">
            			<img src="<?php echo $src_capa1; ?>" class="img-fluid d-none d-md-block">
            			<img src="<?php echo $src_capa1_m; ?>" class="img-fluid d-block d-md-none">
            			</a>
            			<?php }
        					} else {
       						// no posts found
        					}
        					/* Restore original Post Data */
        					wp_reset_postdata();
        				?>
              		</div>

              		<div class="carousel-item">
						<!-- Slide 2 -->
						<?php
							$query_capa2 = array(
								'post_type' => 'post',
								'meta_query' => array(
						        	array(
						            	'key'       => 'wpcf-destaque',
						            	'value'     => 'capa2',
						            	'compare'   => '='
						        	)
						    	), 
						    	'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
							$loop_capa2 = new WP_Query( $query_capa2 );
							if ( $loop_capa2->have_posts() ) {
							while ( $loop_capa2->have_posts() ) {
							$loop_capa2->the_post();
							$thumb_capa2 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'capa');
							$src_capa2 = $thumb_capa2['0'];
							$thumb_capa2_m = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'capa-mobile');
							$src_capa2_m = $thumb_capa2_m['0'];
							$post_capa2 = $post->ID;
						?>
						<a href="<?php the_permalink(); ?>">
            			<img src="<?php echo $src_capa2; ?>" class="img-fluid d-none d-md-block">
            			<img src="<?php echo $src_capa2_m; ?>" class="img-fluid d-block d-md-none">
            			</a>
            			<?php }
        					} else {
       						// no posts found
        					}
        					/* Restore original Post Data */
        					wp_reset_postdata();
        				?>
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

				<!-- Superbanner -->
				<?php
					$query_superbanner = array(
					'post_type' => 'post',
					'meta_query' => array(
					   	array(
					       	'key'       => 'wpcf-destaque',
					       	'value'     => 'superbanner',
					       	'compare'   => '='
					   	)
					), 
					'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
					$loop_superbanner = new WP_Query( $query_superbanner );
					if ( $loop_superbanner->have_posts() ) {
					while ( $loop_superbanner->have_posts() ) {
						$loop_superbanner->the_post();
						$thumb_superbanner = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'superbanner');
						$src_superbanner = $thumb_superbanner['0'];
						$thumb_superbanner_m = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
						$src_superbanner_m = $thumb_superbanner_m['0'];
						$post_superbanner = $post->ID;
				?>

			    <article class="card">
			    	<img class="card-img-top d-none d-md-block" src="<?php echo $src_superbanner; ?>">
			    	<img class="card-img-top d-block d-md-none" src="<?php echo $src_superbanner_m; ?>">
			    	<a href="#" class="btn-adesao">
			    		<div class="card-footer">
			    			<?php echo get_the_excerpt(); ?>
			    		</div>
			    	</a>
			    </article>

				<?php }
        			} else {
       				// no posts found
        			}
        			/* Restore original Post Data */
        			wp_reset_postdata();
        		?>

				<!-- Destaques - topo à esquerda -->
				<?php
					$query_destaque1 = array(
					'post_type' => 'post',
					'meta_query' => array(
					   	array(
					       	'key'       => 'wpcf-destaque',
					       	'value'     => 'destaque1',
					       	'compare'   => '='
					   	)
					), 
					'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
					$loop_destaque1 = new WP_Query( $query_destaque1 );
					if ( $loop_destaque1->have_posts() ) {
					while ( $loop_destaque1->have_posts() ) {
						$loop_destaque1->the_post();
						$thumb_destaque1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
						$src_destaque1 = $thumb_destaque1['0'];
						$post_destaque1 = $post->ID;
						$exibe_cat = get_post_meta($post->ID, 'wpcf-exibir-categoria', true);
						$chamada = get_post_meta($post->ID, 'wpcf-chamada', true);
						$posicao_chamada = get_post_meta($post->ID, 'wpcf-posicao-chamada', true);
				?>

			    <article class="card">
					<img class="card-img" src="<?php echo $src_destaque1; ?>">
				    <div class="card-img-overlay <?php echo $posicao_chamada; ?>">
				    	<?php if ($exibe_cat === "s") { ?>
				    	<h6 class="card-subtitle">
						<?php
						$categories = get_the_category();
						if ( ! empty( $categories ) ) {
						    echo esc_html( $categories[0]->name );
						}
						?>
				    	</h6>
				    	<?php } ?>
					    <h4 class="card-title"><?php the_title(); ?></h4>
					    <p class="card-text"><?php echo get_the_excerpt(); ?></p>
					    <a class="btn btn-logo" href="<?php the_permalink(); ?>"><?php echo $chamada; ?></a>
				    </div>
			    </article>

				<?php }
        			} else {
       				// no posts found
        			}
        			/* Restore original Post Data */
        			wp_reset_postdata();
        		?>

				<!-- Destaques - Abaixo à esquerda -->
				<?php
					$query_destaque2 = array(
					'post_type' => 'post',
					'meta_query' => array(
					   	array(
					       	'key'       => 'wpcf-destaque',
					       	'value'     => 'destaque2',
					       	'compare'   => '='
					   	)
					), 
					'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
					$loop_destaque2 = new WP_Query( $query_destaque2 );
					if ( $loop_destaque2->have_posts() ) {
					while ( $loop_destaque2->have_posts() ) {
						$loop_destaque2->the_post();
						$thumb_destaque2 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
						$src_destaque2 = $thumb_destaque2['0'];
						$post_destaque2 = $post->ID;
						$exibe_cat = get_post_meta($post->ID, 'wpcf-exibir-categoria', true);
						$chamada = get_post_meta($post->ID, 'wpcf-chamada', true);
						$posicao_chamada = get_post_meta($post->ID, 'wpcf-posicao-chamada', true);
				?>

			    <article class="card">
					<img class="card-img" src="<?php echo $src_destaque2; ?>">
				    <div class="card-img-overlay <?php echo $posicao_chamada; ?>">
				    	<?php if ($exibe_cat === "s") { ?>
				    	<h6 class="card-subtitle">
						<?php
						$categories = get_the_category();
						if ( ! empty( $categories ) ) {
						    echo esc_html( $categories[0]->name );
						}
						?>
				    	</h6>
				    	<?php } ?>
					    <h4 class="card-title"><?php the_title(); ?></h4>
					    <p class="card-text"><?php echo get_the_excerpt(); ?></p>
					    <a class="btn btn-logo" href="<?php the_permalink(); ?>"><?php echo $chamada; ?></a>
				    </div>
			    </article>

				<?php }
        			} else {
       				// no posts found
        			}
        			/* Restore original Post Data */
        			wp_reset_postdata();
        		?>

				<!-- Destaques - topo à direita -->
				<?php
					$query_destaque3 = array(
					'post_type' => 'post',
					'meta_query' => array(
					   	array(
					       	'key'       => 'wpcf-destaque',
					       	'value'     => 'destaque3',
					       	'compare'   => '='
					   	)
					), 
					'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
					$loop_destaque3 = new WP_Query( $query_destaque3 );
					if ( $loop_destaque3->have_posts() ) {
					while ( $loop_destaque3->have_posts() ) {
						$loop_destaque3->the_post();
						$thumb_destaque3 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
						$src_destaque3 = $thumb_destaque3['0'];
						$post_destaque3 = $post->ID;
						$exibe_cat = get_post_meta($post->ID, 'wpcf-exibir-categoria', true);
						$chamada = get_post_meta($post->ID, 'wpcf-chamada', true);
						$posicao_chamada = get_post_meta($post->ID, 'wpcf-posicao-chamada', true);
				?>

			    <article class="card">
					<img class="card-img" src="<?php echo $src_destaque3; ?>">
				    <div class="card-img-overlay <?php echo $posicao_chamada; ?>">
				    	<?php if ($exibe_cat === "s") { ?>
				    	<h6 class="card-subtitle">
						<?php
						$categories = get_the_category();
						if ( ! empty( $categories ) ) {
						    echo esc_html( $categories[0]->name );
						}
						?>
				    	</h6>
				    	<?php } ?>
					    <h4 class="card-title"><?php the_title(); ?></h4>
					    <p class="card-text"><?php echo get_the_excerpt(); ?></p>
					    <a class="btn btn-logo" href="<?php the_permalink(); ?>"><?php echo $chamada; ?></a>
				    </div>
			    </article>

				<?php }
        			} else {
       				// no posts found
        			}
        			/* Restore original Post Data */
        			wp_reset_postdata();
        		?>

				<!-- Destaques - Abaixo à direita -->
				<?php
					$query_destaque4 = array(
					'post_type' => 'post',
					'meta_query' => array(
					   	array(
					       	'key'       => 'wpcf-destaque',
					       	'value'     => 'destaque4',
					       	'compare'   => '='
					   	)
					), 
					'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
					$loop_destaque4 = new WP_Query( $query_destaque4 );
					if ( $loop_destaque4->have_posts() ) {
					while ( $loop_destaque4->have_posts() ) {
						$loop_destaque4->the_post();
						$thumb_destaque4 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
						$src_destaque4 = $thumb_destaque4['0'];
						$post_destaque4 = $post->ID;
						$exibe_cat = get_post_meta($post->ID, 'wpcf-exibir-categoria', true);
						$chamada = get_post_meta($post->ID, 'wpcf-chamada', true);
						$posicao_chamada = get_post_meta($post->ID, 'wpcf-posicao-chamada', true);
				?>

			    <article class="card">
					<img class="card-img" src="<?php echo $src_destaque4; ?>">
				    <div class="card-img-overlay <?php echo $posicao_chamada; ?>">
				    	<?php if ($exibe_cat === "s") { ?>
				    	<h6 class="card-subtitle">
						<?php
						$categories = get_the_category();
						if ( ! empty( $categories ) ) {
						    echo esc_html( $categories[0]->name );
						}
						?>
				    	</h6>
				    	<?php } ?>
					    <h4 class="card-title"><?php the_title(); ?></h4>
					    <p class="card-text"><?php echo get_the_excerpt(); ?></p>
					    <a class="btn btn-logo" href="<?php the_permalink(); ?>"><?php echo $chamada; ?></a>
				    </div>
			    </article>

				<?php }
        			} else {
       				// no posts found
        			}
        			/* Restore original Post Data */
        			wp_reset_postdata();
        		?>

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