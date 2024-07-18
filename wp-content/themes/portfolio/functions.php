<?php

add_image_size('extralarge',1700 , 1700, true);
function register_my_menu_locations() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_my_menu_locations' );
function dw_get_navigation_links(string $location): array
{
    // Pour la location, retrouver le menu
    $locations = get_nav_menu_locations();
    $menuId = $locations[$location] ?? null;

    // Au cas ou pas de menu assignes à la location, renvoyer un tableau de liens vide
    if (is_null($menuId)) {
        return [];
    }

    // Pour ce menu, récupérer les liens
    $items = wp_get_nav_menu_items($menuId);

    // Formater les liens en objets pour ne garder que "URL" et "label" comme propriétés
    foreach ($items as $key => $item) {
        $items[$key] = new stdClass();
        $items[$key]->url = $item->url;
        $items[$key]->label = $item->title;
    }

    // Retourner le tableau de liens formatés
    return $items;
}
function dw_asset(string $file): string
{
    return get_template_directory_uri() . '/ressources/' . $file;
}