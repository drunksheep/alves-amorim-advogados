<?php 

// Disable WP emoji scripts and styles
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

// Remove WP block library CSS
add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles'); // optional
}, 100);

// Disable embeds
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_filter('the_content', 'wp_filter_oembed_result');
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('template_redirect', 'rest_output_link_header', 11);

// Remove generator meta tag
remove_action('wp_head', 'wp_generator');

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Remove shortlink
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('template_redirect', 'wp_shortlink_header', 11);

// Disable dashicons for non-logged-in users
add_action('wp_enqueue_scripts', function() {
    if (!is_user_logged_in()) {
        wp_dequeue_style('dashicons');
    }
});

// Optional: disable admin bar on front end
add_filter('show_admin_bar', '__return_false');
