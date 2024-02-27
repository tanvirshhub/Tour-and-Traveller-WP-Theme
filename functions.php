<?php

// Register theme_textdomain and navigation

if (!function_exists('mediplus_setup_theme')) {
    function mediplus_setup_theme()
    {
        load_theme_textdomain('mediplus_setup_theme_text_domain', get_template_directory() . '/languages');

        register_nav_menus( array(
            'top_menu'     => __('Top_Menu','mediplus_setup_theme_text_domain'),
            'mainmenu'     => __('Main Menu','mediplus_setup_theme_text_domain'),
            'primary_menu' => __( 'Primary Menu', 'mediplus_setup_theme_text_domain' ),
	    	'footer_menu'  => __( 'Footer Menu', 'mediplus_setup_theme_text_domain' ),
            
		) );
    }
}

add_action('after_setup_theme', 'mediplus_setup_theme');

// Register Custom menu link class 

function mediplus_primary_menu($classes, $item, $args) {
    if(isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'mediplus_primary_menu', 1, 3);


function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

  
  // Register Custom Navigation Walker
 
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


  function mediplus_post_support(){
    add_theme_support( 'post-thumbnails' ); 
    add_theme_support( 'comments' ); 
}
add_action('after_setup_theme', 'mediplus_post_support');
 
 
 
 
 //  <!-- Register Footer Widget Areas -->
function theme_register_footer_widgets() {
    register_sidebar(array(
        'name'          => __('Footer Column 1', 'themefic_task_text_domain'),
        'id'            => 'footer-column-1',
        'description'   => __('Widgets for the first column in the footer.', 'themefic_task_text_domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 2', 'themefic_task_text_domain'),
        'id'            => 'footer-column-2',
        'description'   => __('Widgets for the second column in the footer.', 'themefic_task_text_domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 3', 'themefic_task_text_domain'),
        'id'            => 'footer-column-3',
        'description'   => __('Widgets for the third column in the footer.', 'themefic_task_text_domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 4', 'themefic_task_text_domain'),
        'id'            => 'footer-column-4',
        'description'   => __('Widgets for the fourth column in the footer.', 'themefic_task_text_domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}

add_action('widgets_init', 'theme_register_footer_widgets');



<footer class="footer" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/Footer.png'; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="footer-logo">
                        <a href="index.html"><img src="<?php

                                                        $options = get_option('_prefix_my_options');
                                                        echo $options['logo'];
                                                        ?>" alt="#"></a>
                    </div>
                    <div class="content">
                        <h4>(+256) 6982 32156</h4>
                        <p>info@tragaway.com</p>
                        <h5>Our Office Location:</h5>
                        <p>512 Hilton Street, <br> EDT Corss
                            Boston. United State</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4><a href="#">Our Services</a></h4>
                        <div class="footer-content">
                            <ul>
                                <li><a href="index.html">Tour & Travel</a></li>
                                <li><a href="about.html">Hotel Booking</a></li>
                                <li><a href="parking-zone.html">Tour Guide</a></li>
                                <li><a href="contact.html">City Traveling</a></li>
                                <li><a href="about.html">Restaurant</a></li>
                                <li><a href="about.html">Car Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4><a href="#">Quick Links</a></h4>
                        <div class="footer-content">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Blogs</a></li>
                                <li><a href="#">Teams</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-caption mb-50">
                    <div class="footer-tittle">
                        <h4><a href="contact.html">Newsletter</a></h4>
                        <div class="footer-content">
                            <p>Subscribe our weekly newsletter</p>
                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="email" placeholder="Enter Email Address">
                                    <button>Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>