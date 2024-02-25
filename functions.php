 <!-- Register Footer Widget Areas -->
function theme_register_footer_widgets() {
    register_sidebar(array(
        'name'          => __('Footer Column 1', 'theme-text-domain'),
        'id'            => 'footer-column-1',
        'description'   => __('Widgets for the first column in the footer.', 'theme-text-domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 2', 'theme-text-domain'),
        'id'            => 'footer-column-2',
        'description'   => __('Widgets for the second column in the footer.', 'theme-text-domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 3', 'theme-text-domain'),
        'id'            => 'footer-column-3',
        'description'   => __('Widgets for the third column in the footer.', 'theme-text-domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 4', 'theme-text-domain'),
        'id'            => 'footer-column-4',
        'description'   => __('Widgets for the fourth column in the footer.', 'theme-text-domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}

add_action('widgets_init', 'theme_register_footer_widgets');
