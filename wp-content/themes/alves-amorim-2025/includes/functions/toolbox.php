<?php


function image_dir($path)
{
    return get_stylesheet_directory_uri() . '/src/assets/images/' . $path;
}

function get_menu_tree($menu_slug)
{
    $menu = wp_get_nav_menu_object($menu_slug);
    if (!$menu)
        return [];

    $items = wp_get_nav_menu_items($menu->term_id, ['orderby' => 'menu_order']);
    $tree = [];
    $children = [];

    foreach ($items as $item) {
        $item->children = [];
        $children[$item->menu_item_parent][] = $item;
    }

    foreach ($items as $item) {
        if ($item->menu_item_parent == 0) {
            if (isset($children[$item->ID])) {
                $item->children = $children[$item->ID];
            }
            $tree[] = $item;
        }
    }

    return $tree;
}
