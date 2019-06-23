<?php
$search = (get_search_query() != "") ? get_search_query() : "Buscar" ;
?>

<form method="get" class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="buscar mr-auto">
		<input class="" type="search" placeholder="Buscar" aria-label="Buscar" value="<?php echo $search; ?>" name="s">
	</div>
	<div class="submit">
		<button class="" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pre-header/search-icon.png" class="img-fluid" alt="..."></button>
	</div>
</form>
