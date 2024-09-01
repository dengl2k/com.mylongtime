<?php
/**
 * @package Boss Child Theme
 * The parent theme functions are located at /boss/buddyboss-inc/theme-functions.php
 * Add your own functions in this file.
 */

/**
 * Sets up theme defaults
 *
 * @since Boss Child Theme 1.0.0
 */

function boss_child_theme_setup()
{
  /**
   * Makes child theme available for translation.
   * Translations can be added into the /languages/ directory.
   * Read more at: http://www.buddyboss.com/tutorials/language-translations/
   */

  // Translate text from the PARENT theme.
  load_theme_textdomain( 'boss', get_stylesheet_directory() . '/languages' );

  // Translate text from the CHILD theme only.
  // Change 'boss' instances in all child theme files to 'boss_child_theme'.
  // load_theme_textdomain( 'boss_child_theme', get_stylesheet_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'boss_child_theme_setup' );

/**
 * Enqueues scripts and styles for child theme front-end.
 *
 * @since Boss Child Theme  1.0.0
 */
function boss_child_theme_scripts_styles()
{
  /**
   * Scripts and Styles loaded by the parent theme can be unloaded if needed
   * using wp_deregister_script or wp_deregister_style.
   *
   * See the WordPress Codex for more information about those functions:
   * http://codex.wordpress.org/Function_Reference/wp_deregister_script
   * http://codex.wordpress.org/Function_Reference/wp_deregister_style
   **/

  /*
   * Styles
   */   
     
  $jquery_version = isset( $wp_scripts->registered['jquery-ui-core']->ver ) ? $wp_scripts->registered['jquery-ui-core']->ver : '1.11.4';
  wp_enqueue_style( 'jquery-ui-style', '//ajax.googleapis.com/ajax/libs/jqueryui/' . $jquery_version . '/themes/smoothness/jquery-ui.min.css' );
  
  //$my_css_ver  = date("ymd", filemtime( get_stylesheet_directory_uri().'/css/custom.css' ));
  wp_enqueue_style( 'boss-child-custom', get_stylesheet_directory_uri().'/css/custom.css', array(), rand(0,100000) );
  
  //$my_css_ver  = filemtime( get_stylesheet_directory_uri().'/css/datepicker.css' );
  wp_enqueue_style( 'boss-child-datepicker', get_stylesheet_directory_uri().'/css/datepicker.css', array(), rand(0,100000) );
  
  /*
   * Scripts !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Version is done by random number!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
   */  
  //$my_js_ver  = date("ymd-Gis", filemtime( get_stylesheet_directory_uri().'/js/custom.js' ));  
  wp_enqueue_script('boss-child-customjs', get_stylesheet_directory_uri().'/js/custom.js', ['jquery', 'jquery-ui-datepicker'], rand(0,100000), true );
  wp_localize_script( 'boss-child-customjs', 'myScriptVars', [
        'root'  => esc_url_raw( rest_url() ),
        'nonce' => wp_create_nonce( 'wp_rest' ),
    ] );
}
add_action( 'wp_enqueue_scripts', 'boss_child_theme_scripts_styles', 9999 );


/****************************** CUSTOM FUNCTIONS ******************************/

// Add your own custom functions here


function add_favicon_child() {  
  echo '<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">';
  echo '<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">';
  echo '<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">';
  //echo '<link rel="manifest" href="/site.webmanifest" crossorigin="use-credentials">';
  echo '<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">';
  echo '<meta name="msapplication-TileColor" content="#da532c">';
  echo ' <meta name="theme-color" content="#ffffff">';
}

add_action('wp_head', 'add_favicon_child');

$sage_includes = [ 
   'lib/buddy_scripts.php', // Buddyboss Overrides
   'lib/pwa_scripts.php', // PWA
   'lib/common_functions.php', //Common functions
   'lib/buddypress_api.php' // REST API
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    //trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

add_filter('use_block_editor_for_post', '__return_false', 10);

/*21.06.2019 Gutenberg CSS*/
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
function remove_block_css() {
	wp_dequeue_style( 'wp-block-library' ); // WordPress core
}
/*02.02.2021 For Test IFrame Login. Not needed anymore?	
function add_header_xua() {
	header( 'Content-Security-Policy: frame-ancestors FULL-URL' );
}
add_action( 'send_headers', 'add_header_xua' );*/

add_filter( 'template_include', function($template) {
    return isset($_GET['map']) ? locate_template(['lib/map.php']) : $template ;
}, 99 );
add_filter( 'template_include', function($template) {
    return isset($_GET['createtax']) ? locate_template(['createtaxonomy.php']) : $template ;
}, 99 );

//02.02.21
function child_remove_parent_function() {
    remove_action( 'wp_head', 'boss_generate_option_css', 99 );
}
add_action( 'wp_loaded', 'child_remove_parent_function' );

// SMTP Authentication
add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->Username   = SMTP_USER;
    $phpmailer->Password   = SMTP_PASS;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_NAME;
}
//TEMPORARY 11.12.2023
//define('DISABLE_WP_CRON', true);