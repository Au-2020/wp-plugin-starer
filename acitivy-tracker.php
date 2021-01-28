<?php
/**
* Plugin Name: Acitivy Tracker
* Plugin URI: 
* Description: Acitivy Tracker
* Version: 1.0.0
* Author: SOD
* Author URI:
* Text Domain:
* Domain Path:
*
*/

if ( ! class_exists( 'ACITIVY_TRACKER' ) ) :

final class ACITIVY_TRACKER {

  public $version = '1.0.0';

  protected static $_instance = null;

  public function __construct() {

    $this->define_constants();
    $this->includes();
    $this->_hooks();

  }

  /**
  * Define LoginPress Constants
  */
  private function define_constants() {

    define( 'ACITIVY_TRACKERPLUGIN_BASENAME', plugin_basename( __FILE__ ) );
    define( 'ACITIVY_TRACKERDIR_PATH', plugin_dir_path( __FILE__ ) );
    define( 'ACITIVY_TRACKERDIR_URL', plugin_dir_url( __FILE__ ) );
    define( 'ACITIVY_TRACKERROOT_PATH',  dirname( __FILE__ ) . '/' );
    define( 'ACITIVY_TRACKERROOT_FILE', __FILE__ );        
  }

  public function includes() {

    
  }

  private function _hooks() {
    
  }

  public function acr_calculator_ajax() {
    
  }


  public function acr_calculator($atts, $content) {
    $args = shortcode_atts( array(
      "password" => "",
      "protected" => false
      ), $atts);

      ob_start();
      ?>
      

      <?php
      $html = ob_get_contents();
      ob_end_clean();

      return $html;
  }

  public static function instance() {
    if (is_null(self::$_instance)) {
        self::$_instance = new self();
    }

    return self::$_instance;
  }

  public static function install() {
    
  }

}

endif;

register_activation_hook( __FILE__, array( 'ACITIVY_TRACKER', 'install' ) );

function ACITIVY_TRACKER_loader() {
    return ACITIVY_TRACKER::instance();
}

ACITIVY_TRACKER_loader();