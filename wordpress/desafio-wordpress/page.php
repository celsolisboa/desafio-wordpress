<?php get_header(); ?>

<main>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/page.css">

	<div class="container-fluid">
		<div class="container p-0">

			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();

				the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// End of the loop.
			endwhile;
			?>

		</div>
	</div>

</main>

<?php get_footer(); ?>
