<?php


function image_dir($path)
{
    return get_stylesheet_directory_uri() . '/src/assets/images/' . $path;
}

function video_dir($path)
{
    return get_stylesheet_directory_uri() . '/src/assets/videos/' . $path;
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


function custom_breadcrumb() {
    if (is_front_page()) return;

    global $post;
    $home_link = home_url('/');
    $blog_link = home_url('/blog');
    $separator = '<li class="separator" aria-hidden="true">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M9 4.5L16.5 12L9 19.5" stroke="#3968ED" stroke-width="1.5"
                  stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </li>';

    echo '<ul class="breadcrumb">';

    // Home link
    echo '<li><a href="' . $home_link . '">Home</a></li>';

    // If single post
    if (is_single() && get_post_type() === 'post') {
        echo $separator . '<li><a href="' . $blog_link . '">Blog</a></li>';
        echo $separator . '<li>' . get_the_title() . '</li>';
        echo '</ul>';
        return;
    }

    // Pages with parents
    if (is_page() && $post->post_parent) {
        $parents = [];
        $parent_id = $post->post_parent;
        while ($parent_id) {
            $page = get_post($parent_id);
            $parents[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
            $parent_id = $page->post_parent;
        }
        $parents = array_reverse($parents);
        foreach ($parents as $crumb) {
            echo $separator . $crumb;
        }
    }

    // Current page (default case)
    echo $separator . '<li>' . get_the_title() . '</li>';
    echo '</ul>';
}
