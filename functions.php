function enqueue_foldable_template_assets() {
    if (is_page_template('page-foldable.php')) {
        wp_enqueue_style('foldable-template', get_stylesheet_directory_uri() . '/assets/css/foldable-template.css');
        wp_enqueue_script('foldable-template', get_stylesheet_directory_uri() . '/assets/js/foldable-template.js', array(), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_foldable_template_assets'); 