<?php 

Class Theme_setup {
    public function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_theme_styles']); 
        add_action('wp_enqueue_scripts', [$this, 'enqueue_theme_scripts']);
        add_action('init', [$this, 'theme_supports']);
        add_action('init', [$this, 'register_menus']); 
        add_action('wp_enqueue_scripts', [$this, 'hoist_theme_vars']);
    }

    public function enqueue_theme_styles() {
        wp_enqueue_style('theme', get_stylesheet_directory_uri() . '/dist/assets/main.css', [], null, 'all');
    }

    public function enqueue_theme_scripts() {
        wp_enqueue_script('theme', get_stylesheet_directory_uri() . '/dist/assets/main.js', [], null, true );
    }

    public function theme_supports() {
        add_theme_support('post-thumbnails');
    }

    public function register_menus() {
        register_nav_menu('Header', 'Menu do Header');
        register_nav_menu('Footer', 'Menu do Footer');
    }

    public function hoist_theme_vars() {
        wp_localize_script('theme', 'helpers', [
            'stylesheet_uri' => get_stylesheet_directory_uri(), 
            'ajax_url' => admin_url('admin-ajax.php'),
            'current_queried_object' => get_queried_object(), 
            'theme_image_dir' => get_stylesheet_directory_uri() . '/src/assets/images/',
            'is_home' => is_page('home')
        ]);
    }
}

$theme = new Theme_setup();