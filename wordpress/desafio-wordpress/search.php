<?php get_header(); ?>

<main>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/page.css">

	<div class="container-fluid">
		<div class="container p-0">

			<?php if ( have_posts() ) { ?>

				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', '' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

					<?php
					// Start the loop.
					while ( have_posts() ) {
						the_post();

						the_content();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
						
						// End of the loop.
					}

					the_posts_pagination(
						array(
							'prev_text'          => __( 'Previous page', 'twentysixteen' ),
							'next_text'          => __( 'Next page', 'twentysixteen' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
						)
					);

				} else {
					get_template_part( 'template-parts/content', 'none' );
				}

				?>

			</div>
		</div>

	</main>

	<?php get_footer(); ?>
