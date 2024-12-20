<?php
// Charger les styles du thème parent et du thème enfant pour Planty du projet 6
function theme_enqueue_style() {
    // Charger le style parent
    wp_enqueue_style('hello-elementor-parent-style', get_template_directory_uri() . '/style.css');

    // Charger le style enfant
    wp_enqueue_style('hello-elementor-child-style', get_stylesheet_directory_uri() . '/style.css', array('hello-elementor-parent-style'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_style');

// Déclarez un emplacement de menu
function register_custom_menus() {
    register_nav_menus(
        array(
            'menu-entete' => __( 'Menu Entête', 'menu-entete' )
        )
    );
}
add_action( 'init', 'register_custom_menus' );

// Ajouter un bouton "WP Admin" dans l'en-tête par le hook d action "wp_nav_menu_items" visible pour l administrateur
function add_wp_admin_button_second_position($items, $args) {
    // Vérifie si le menu correspond à "menu-entete"
    if ($args->theme_location === 'menu-entete') {
        // Bouton WP-admin pour les utilisateurs connectés
        if (is_user_logged_in()) {
            $admin_url = esc_url(admin_url());
            $wp_admin_item = '<li class="menu-item wp-admin-button"><a href="' . $admin_url . '">Admin</a></li>';
            
            // Convertit le menu en tableau pour insérer à la 2e position
            $menu_items = explode('</li>', $items); // Divise les items
            array_splice($menu_items, 1, 0, $wp_admin_item); // Insère après le premier item
            
            // Reconstruit le menu
            $items = implode('</li>', $menu_items);
        }
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_wp_admin_button_second_position', 10, 2);

?>
