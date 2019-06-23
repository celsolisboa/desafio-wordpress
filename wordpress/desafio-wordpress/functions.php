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
?>
