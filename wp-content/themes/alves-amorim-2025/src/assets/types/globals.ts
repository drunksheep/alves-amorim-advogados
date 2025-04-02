declare global {
    interface Window {
        helpers: {
            stylesheet_uri: string;
            ajax_url: string;
            theme_image_dir : string;
            current_queried_object: any;
        }
    }
}
