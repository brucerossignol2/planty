<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-entete">
	<div class="contenu">
        <!-- Logo -->
        <div class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_theme_file_uri( '../../uploads/2024/12/Logo-source-300x51.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
            </a>
        </div>

<nav class="main-navigation">

		<!-- Menu -->
        <nav class="main-navigation">
            <?php
            wp_nav_menu( array(
				'theme_location' => 'menu-entete',
				'menu' 			=> 'menu-entete',
                'menu_class'     => 'menu-list',
                'container'      => false,
            ) );
            ?>
        </nav>
	</div>
</header>
<?php wp_footer(); ?>
</body>
</html>


