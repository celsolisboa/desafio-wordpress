<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

function preMobileMenu($menu = 'mobile-menu'){
    $navData = wp_get_nav_menu_items($menu);
    ?>
    <ul class="navbar-nav">
        <?php
        foreach($navData as $k => $v){
            if($v->ID == 58) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $v->url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pre-header/boleto-icon.png" class="boleto-icon" alt=""><?php echo $v->title; ?></a>
                </li>
                <?php
            } else {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $v->url; ?>"><?php echo $v->title; ?></a>
                </li>
                <?php
            }
        }
        ?>
    </ul>
    <?php
}

function preHeaderMenu($menu = 'pre-header'){
    $navData = wp_get_nav_menu_items($menu);
    ?>
    <ul class="navbar-nav d-flex flex-row justify-content-center align-items-center">
        <?php
        foreach($navData as $k => $v){
            if($v->ID == 54) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $v->url; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pre-header/boleto-icon.png" class="boleto-icon" alt=""><?php echo $v->title; ?></a>
                </li>
                <?php
            } else {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $v->url; ?>"><?php echo $v->title; ?></a>
                </li>
                <?php
            }
        }
        ?>
    </ul>
    <?php
}

add_action( 'init', 'banner_init' );

if (!function_exists('Banner_init')) {
    function Banner_init() {
        $labels = array(
            'name'               => _x( 'Banners', 'post type general name', 'your-plugin-textdomain' ),
            'singular_name'      => _x( 'Banner', 'post type singular name', 'your-plugin-textdomain' ),
            'menu_name'          => _x( 'Banners', 'admin menu', 'your-plugin-textdomain' ),
            'name_admin_bar'     => _x( 'Banner', 'add new on admin bar', 'your-plugin-textdomain' ),
            'add_new'            => _x( 'Add New', 'banner', 'your-plugin-textdomain' ),
            'add_new_item'       => __( 'Add New Banner', 'your-plugin-textdomain' ),
            'new_item'           => __( 'New Banner', 'your-plugin-textdomain' ),
            'edit_item'          => __( 'Edit Banner', 'your-plugin-textdomain' ),
            'view_item'          => __( 'View Banner', 'your-plugin-textdomain' ),
            'all_items'          => __( 'All Banners', 'your-plugin-textdomain' ),
            'search_items'       => __( 'Search Banners', 'your-plugin-textdomain' ),
            'parent_item_colon'  => __( 'Parent Banners:', 'your-plugin-textdomain' ),
            'not_found'          => __( 'No Banners found.', 'your-plugin-textdomain' ),
            'not_found_in_trash' => __( 'No Banners found in Trash.', 'your-plugin-textdomain' )
        );

        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Description.', 'your-plugin-textdomain' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'banner' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes'  )
        );
        
        register_post_type( 'banner', $args );
    }
}

if (!function_exists('my_rewrite_flush')) {
    function my_rewrite_flush() {
        banner_init();
    }
}

?>
