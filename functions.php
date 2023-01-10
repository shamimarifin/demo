<?php




// Theme Functions


add_action( 'after_setup_theme', 'braintech_theme_func' );

function braintech_theme_func(){

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-header' , array(
        'default-image'   =>     get_template_directory_uri().'/assets/images/breadcrumbs/4.jpg'
    ),
);



    // Footer Menu
    register_nav_menu( 'footer-menu', __('Footer Menu', 'braintech') );


    //Menu

    register_nav_menu( 'main-menu', __('Main Menu' , 'braintech') );

}

// Right Sidebar

add_action( 'widgets_init', 'braintech_right_sidebar' );

function braintech_right_sidebar(){

    register_sidebar( array(
        'name'      =>  __('Right Sidebar' , 'braintech'),
        'id'        =>  'latest-sidebar',
        'description'   =>  'You can add right sidebar',
        'before_widget' =>  '<div class="widget-title">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3 class="title">',
        'after_title'   =>  '</h3>'
    ) );


    // Footer  First Area

    register_sidebar( array(
        'name'      =>  __('Footer First Area' , 'braintech'),
        'id'        =>  'footer-first-area',
        'description'   =>  'You can add footer first area',
        'before_title'  =>  '<h3 class="title">',
        'after_title'   =>  '</h3>'
    ) );

    // Footer  Second Area
    register_sidebar( array(
        'name'      =>  __('Footer Second Area' , 'braintech'),
        'id'        =>  'footer-second-area',
        'description'   =>  'You can add footer second area',
        'before_title'  =>  '<h3 class="title">',
        'after_title'   =>  '</h3>'
    ) );



    // Footer  Third Area
    register_sidebar( array(
        'name'      =>  __('Footer Third Area' , 'braintech'),
        'id'        =>  'footer-third-area',
        'description'   =>  'You can add footer third area',
        'before_title'  =>  '<h3 class="title">',
        'after_title'   =>  '</h3>'
    ) );


     // Footer  Fourt Area
     register_sidebar( array(
        'name'      =>  __('Footer Fourth Area' , 'braintech'),
        'id'        =>  'footer-fourth-area',
        'description'   =>  'You can add footer fourth area',
        'before_title'  =>  '<h3 class="title">',
        'after_title'   =>  '</h3>'
    ) );

}



// Theme Style Function

add_action( 'wp_enqueue_scripts', 'braintech_theme_styles');

function braintech_theme_styles(){

    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.0' , false );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.0.0' ,  false );

    wp_enqueue_style( 'flaticons', get_template_directory_uri().'/assets/fonts/flaticon.css', array(), '1.0.0' ,  false );

    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css', array(), '1.0.0' ,  false );

    wp_enqueue_style( 'carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.0.0' ,  false );

    wp_enqueue_style( 'slick', get_template_directory_uri().'/assets/css/slick.css', array(), '1.0.0' ,  false );

    wp_enqueue_style( 'canvas', get_template_directory_uri().'/assets/css/off-canvas.css', array(), '1.0.0' ,  false );

    wp_enqueue_style( 'magnific', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0.0' ,  false );

    wp_enqueue_style( 'rs-menu', get_template_directory_uri().'/assets/css/rsmenu-main.css', array(), '1.0.0'  , false);

    wp_enqueue_style( 'rs-spacing', get_template_directory_uri().'/assets/css/rs-spacing.css', array(), '1.0.0' ,  false);

    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0' , false );

    wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.0' , false);

    wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );


}


// Add Favicon

add_action( 'wp_head', 'braintech_favicon' );

function braintech_favicon(){

    echo '<link rel="apple-touch-icon" href="apple-touch-icon.html">';
   echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_stylesheet_directory_uri().'/assets/images/fav.png">';
}



// Condition Add

add_action( 'wp_enqueue_scripts', 'braintech_condition_func');

function braintech_condition_func(){

    wp_enqueue_script( 'html5shim', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', array( ), '1.0.0' , false );
    wp_script_add_data( 'html5shim', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '1.0.0', false );
    wp_script_add_data( 'respond', 'conditional', 'It IE 9' );


}



//JS function Added


add_action( 'wp_enqueue_scripts', 'braintech_theme_scripts_func' );

function braintech_theme_scripts_func(){

    wp_enqueue_script( 'modernizr', get_template_directory_uri().'/assets/js/modernizr-2.8.3.min.js', array('jq'), '1.0.0' ,  true );

    wp_enqueue_script( 'jq', get_template_directory_uri().'/assets/js/jquery.min.js', array(), '1.0.0' ,  true );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jq'), '1.0.0' , true );

    wp_enqueue_script( 'rsmenu', get_template_directory_uri().'/assets/js/rsmenu-main.js', array('jq'), '1.0.0' ,  true );

    wp_enqueue_script( 'jq-nav', get_template_directory_uri().'/assets/js/jquery.nav.js', array('jq'), '1.0.0' , true);

    wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jq'), '1.0.0' , true );

    wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/js/wow.min.js', array('jq'), '1.0.0' , true );

    wp_enqueue_script( 'skills-bar', get_template_directory_uri().'/assets/js/skill.bars.jquery.js', array('jq'), '1.0.0' , true );

    wp_enqueue_script( 'counter', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jq'), '1.0.0' , true );

    wp_enqueue_script( 'waypoints', get_template_directory_uri().'/assets/js/waypoints.min.js', array('jq'), '1.0.0' ,  true );

    wp_enqueue_script( 'swiper', get_template_directory_uri().'/assets/js/swiper.min.js', array('jq'), '1.0.0' ,  true );

    wp_enqueue_script( 'particles', get_template_directory_uri().'/assets/js/particles.min.js', array('jq'), '1.0.0' ,  true );

    wp_enqueue_script( 'popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jq'), '1.0.0' ,  true );

    wp_enqueue_script( 'plugin', get_template_directory_uri().'/assets/js/plugins.js', array('jq'), '1.0.0' , true );

    wp_enqueue_script( 'pointer', get_template_directory_uri().'/assets/js/pointer.js', array('jq'), '1.0.0' , true );

    wp_enqueue_script( 'contact', get_template_directory_uri().'/assets/js/contact.form.js', array('jq'),'1.0.0', true );

    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jq'), '1.0.0' ,  true );

}




// Custom Widgets Latest Posts


if(file_exists(dirname(__FILE__).'/custom-widgets/latest-post.php')){
    require_once(dirname(__FILE__).'/custom-widgets/latest-post.php');
}



// Codestar Framework

if(file_exists(dirname(__FILE__).'/lib/codestar-framework.php')){
    require_once(dirname(__FILE__).'/lib/codestar-framework.php');
}

if(file_exists(dirname(__FILE__).'/lib/samples/admin-options.php')){
    require_once(dirname(__FILE__).'/lib/samples/admin-options.php');
}


if(file_exists(dirname(__FILE__).'/breadcrumbs.php')){
    require_once(dirname(__FILE__).'/breadcrumbs.php');
}



if(file_exists(dirname(__FILE__).'/breadcrumbs.php')){
    require_once(dirname(__FILE__).'/breadcrumbs.php');
}


if(file_exists(dirname(__FILE__).'/customnav.php')){
    require_once(dirname(__FILE__).'/customnav.php');
}




