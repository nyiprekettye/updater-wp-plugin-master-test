<!-- <?php
/*
	Plugin Name: updater-wp-plugin-master-test updated version
	Description: This is for updating your Wordpress plugin.
	Version: 1.0.6
	Author: Nyíri Péter
	Author URI: 
*/
if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'nyiprekettye' );
$updater->set_repository( 'updater-wp-plugin-master-test' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();


// // require_once( 'BFIGitHubPluginUpdater.php' );
// include_once( plugin_dir_path( __FILE__ ) . 'BFIGitHubPluginUpdater.php' );
// if ( is_admin() ) {
//     new BFIGitHubPluginUpdater( __FILE__, 'nyiprekettye', "updater-wp-plugin-master-test" );
// }

// ?>