<?php
/**
 * Velvet Suite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Velvet_Suite
 */

if ( ! function_exists( 'velvet_suite_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function velvet_suite_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Velvet Suite, use a find and replace
		 * to change 'velvet-suite' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'velvet-suite', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'velvet-suite' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'velvet_suite_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'velvet_suite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function velvet_suite_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'velvet_suite_content_width', 640 );
}
add_action( 'after_setup_theme', 'velvet_suite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function velvet_suite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'velvet-suite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'velvet-suite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	//Our Custom Footer Widget
	register_sidebar( array(
		'name'          => esc_html__( 'Latest Blog Post', 'velvet-suite' ),
		'id'            => 'latest_blog_post',
		'description'   => esc_html__( 'Add widgets here.', 'velvet-suite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Brands', 'velvet-suite' ),
		'id'            => 'brands',
		'description'   => esc_html__( 'Add widgets here.', 'velvet-suite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Contact us', 'velvet-suite' ),
		'id'            => 'contact_us',
		'description'   => esc_html__( 'Add widgets here.', 'velvet-suite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Bottom Footer', 'velvet-suite' ),
		'id'            => 'bottom_footer',
		'description'   => esc_html__( 'Add widgets here.', 'velvet-suite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'velvet_suite_widgets_init' );

//Our Custom Code




/**
 * Enqueue scripts and styles.
 */
function velvet_suite_scripts() {
	
	wp_enqueue_style( 'velvet-suite-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '');
	
	wp_enqueue_style( 'velvet-suite-custom', get_template_directory_uri() . '/css/custom.css', array(), '');

	wp_enqueue_style( 'velvet-suite-animate', get_template_directory_uri() . '/css/animate.css', array(), '');
	
	wp_enqueue_style( 'velvet-suite-responsive', get_template_directory_uri() . '/css/velvet_responsive.css', array(), '');

	

	//wp_enqueue_style( 'velvet-suite-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '');
	
	wp_enqueue_style( 'velvet-suite-style', get_stylesheet_uri() );

	wp_enqueue_script( 'velvet-suite-jquery', get_template_directory_uri() . '/js/jquery.js', array('not-existant'), '');
	
	wp_enqueue_script( 'velvet-suite-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '');
	
	wp_enqueue_script( 'velvet-suite-custom', get_template_directory_uri() . '/js/custom.js', array(), '', true );
	
	//wp_enqueue_script( 'velvet-suite-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '');

	wp_enqueue_script( 'velvet-suite-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '');


	wp_enqueue_script( 'velvet-suite-wow', get_template_directory_uri() . '/js/wow.js', array(), '');

	wp_enqueue_script( 'velvet-counter-field', get_template_directory_uri() . '/js/waypoints.min.js', array(), '');

	wp_enqueue_script( 'velvet-isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '');

	wp_enqueue_script( 'velvet-counter-up', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '');
	

	wp_enqueue_script( 'velvet-suite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'velvet-suite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'velvet_suite_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */

/**
 * navigation bootstrap
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


add_theme_support( 'post-thumbnails' ); //Adds thumbnails compatibility to the theme 
set_post_thumbnail_size( 600, 300, true ); // Sets the Post Main Thumbnails 
add_image_size( 'velvet-recent-thumbnails', 350, 50, true ); // Sets Recent Posts Thumbnails

function velvet_recent_posts() {
    $del_recent_posts = new WP_Query();
    $del_recent_posts->query('showposts=4');
        while ($del_recent_posts->have_posts()) : $del_recent_posts->the_post(); ?>
            <div class="block">
                <?php the_post_thumbnail('velvet-recent-thumbnails'); ?>
                <div class="text">
                    <a href="<?php esc_url(the_permalink()); ?>">
                        <h1 class="heading"><?php esc_html(the_title()); ?></h1>
                    </a>
					<p><?php echo get_the_date(); ?></p>
                </div>
            </div>
        <?php endwhile;
    wp_reset_postdata();
}
add_image_size( 'testomonial_thumb', '360', '407', FALSE);
add_image_size( 'blog_thumb', '720', '450', FALSE);
add_image_size( 'blog_grid_thumb', '360', '200', FALSE);
add_image_size( 'portfolio_galler_thumb', '285', '214', FALSE);

// Create Shortcode vc_review_testimonial
// Use the shortcode: [vc_review_testimonial title=""]
function create_vcreviewtestimonia_shortcode($atts) {
    // Attributes
    $atts = shortcode_atts(
        array(
            'title' => '',
        ),
        $atts,
        'vc_review_testimonial'
    );
    // Attributes in var
    $title = $atts['title'];


    $rand     = mt_rand();
    $layoutID = "rt-container-" . $rand;
    $html     = null;
    $arg      = array();
    $atts     = shortcode_atts( array(
        'id' => null
    ), $atts, 'review_testimonial' );
    $scID     = $atts['id'];
    $options = get_option('review_testimonial_settings' );
    $localized_options = array(
        'container_id' => $layoutID,
        'navigation' => $options['show_prev_next_arrows'] == 1 ? 'true': 'false',
        'pagination' => $options['show_pagination'] == 1 ? 'true': 'false',
        'items' => $options['thumbnails_per_row'] != "" ? $options['thumbnails_per_row']: 1,
        'items_900' => $options['thumbnails_per_row_900'] != "" ? $options['thumbnails_per_row_900']: 1,
        'items_600' => $options['thumbnails_per_row_600'] != "" ? $options['thumbnails_per_row_600']: 1,
        'items_400' => $options['thumbnails_per_row_400'] != "" ? $options['thumbnails_per_row_400']: 1,
    );
    wp_localize_script( 'review-testimonial', 'review_testimonial',
        $localized_options
    );
    //echo '<pre>'; print_r($options); die;
    $order_by = null;
    switch ($options['testimonial_order']){
        case 'newest_first':
            $order_by = 'date';
            break;
        case 'updated_first':
            $order_by = 'modified';
            break;
        case 'random' :
            $order_by = 'rand';
            break;
        default :
            $order_by = 'date';
    }
    $args = array(
        'posts_per_page'   => (int) $options['number_of_testimonials'],
        'offset'           => 0,
        'cat'         => '',
        'category_name'    => '',
        'orderby'          => $order_by,
        'order'            => 'DESC',
        'include'          => '',
        'exclude'          => '',
        'meta_key'         => '',
        'meta_value'       => '',
        'post_type'        => 'review-testimonial',
        'post_mime_type'   => '',
        'post_parent'      => '',
        'author'	   => '',
        'author_name'	   => '',
        'post_status'      => 'publish',
        'suppress_filters' => true,
        'fields'           => '',
    );
    $posts_array = get_posts( $args );
    $output = '<div class="section5"><div class="container">';
    if($posts_array and is_array($posts_array)){
        $output .= '<div id="'.$layoutID.'" class="owl-carousel testimonial">';
        foreach($posts_array as $testimonial_post) {
            $author = get_post_meta($testimonial_post->ID, 'review_testimonial_author', true);
            $designation = get_post_meta($testimonial_post->ID, 'review_testimonial_designation', true);
            $company = get_post_meta($testimonial_post->ID, 'review_testimonial_company', true);
            $author = $author . ' - ' . $designation . ' - ' . $company;
            $thumb = get_the_post_thumbnail_url($testimonial_post->ID, 'testomonial_thumb');
            $output .= '<div class="item">';

                if($thumb){

                    $output .= '<div class="img-block"><img src="'. $thumb .'"></div>';

                }

            $output .= '<div class="block">'. $testimonial_post->post_content .'<h3 style="color: #c19c28">'.$author .'</h3></div>';
            $output .= '</div>';
        }

        $output .= '</div>';
    }
    $output .= '</div></div>';


    return $output;
}
add_shortcode( 'vc_review_testimonial', 'create_vcreviewtestimonia_shortcode' );

// Create Review Testimonial Slider element for Visual Composer
add_action( 'vc_before_init', 'vcreviewtestimonia_integrateWithVC' );
function vcreviewtestimonia_integrateWithVC() {
    vc_map( array(
        'name' => __( 'Review Testimonial Slider', 'review-testimonial' ),
        'base' => 'vc_review_testimonial',
        'show_settings_on_create' => true,
        'category' => __( 'Content', 'review-testimonial'),
        'params' => array(
            array(
                'type' => 'textfield',
                'holder' => 'div',
                'class' => '',
                'admin_label' => true,
                'heading' => __( 'Title', 'review-testimonial' ),
                'param_name' => 'title',
            ),
        )
    ) );
}


/**
 * Generate breadcrumbs
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
        if (is_single()) {
            echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
            the_title();
        }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

add_action( 'wp_ajax_nopriv_vs_result_get_post_content', 'f711_vs_result_get_post_content' );
function f711_vs_result_get_post_content() {

    // retrieve post_id, and sanitize it to enhance security
    $post_id = intval($_POST['post_id'] );

    // Check if the input was a valid integer
    if ( $post_id == 0 ) {
        echo "Invalid Format";
        die();
    }

    // get the post
    $thispost = get_post( $post_id );
    // check if post exists
    if ( !is_object( $thispost ) ) {
        echo 'Invalid Format';
        die();
    }

    //Maybe you want to echo wpautop( $thispost->post_content );
    ?>
           <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">More info</h4>
                 </div>
                 <div class="modal-body">
                    <div class="row">
                       <div class="col-sm-4">
                          <div class="team_profile_image">
                             <?php echo get_the_post_thumbnail($thispost->ID)?>
                             <!-- <img src="http://vs.wntechs.com/wp-content/uploads/2014/01/case-study-suzanne-baragry.png" alt="" class="responsive">-->
                          </div>
                       </div>
                       <div class="col-sm-8">
                          <h3 class="member_name"><?php echo $thispost->post_title;?></h3>
                          <p> <?php echo $thispost->post_content;?></p>
            </div>
                    </div>
                 </div>
              </div>
      </div>
   <?php

    die();

}