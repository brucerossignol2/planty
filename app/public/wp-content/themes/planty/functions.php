<?php
// Charger les styles du thème parent et du thème enfant pour Planty du projet 6
function theme_enqueue_style() {
    // Charger le style parent
    wp_enqueue_style('hello-elementor-parent-style', get_template_directory_uri() . '/style.css');

    // Charger le style enfant
    wp_enqueue_style('hello-elementor-child-style', get_stylesheet_directory_uri() . '/style.css', array('hello-elementor-parent-style'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_style');

// Ajouter un bouton "WP Admin" dans l'en-tête par le hook d action "wp_nav_menu_items" visible pour l administrateur
add_action('wp_nav_menu_items', function($items, $args) {
    if (is_user_logged_in() && current_user_can('manage_options')) {
        $admin_url = admin_url();
        $items_array = explode('</li>', $items);
        array_splice($items_array, 1, 0, '<li class="menu-item-admin"><a href="' . $admin_url . '">Admin</a></li>');
        $items = implode('</li>', $items_array);
    }
    return $items;
}, 10, 2);
?>
