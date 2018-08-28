<?php
/**
 * Definitions needed in the plugin
 *
 * @author
 * @version 0.1
 *
 * Version history
 * 0.1 Initial version
 */
// De versie moet gelijk zijn met het versie nummer in de my-eventorganiser.php
header
define( 'MY_EVENT_ORGANISER_VERSION', '0.0.1' );
// Minimum required Wordpress version for this plugin
define( 'MY_EVENT_ORGANISER_REQUIRED_WP_VERSION', '4.0' );
define( 'MY_EVENT_ORGANISER_PLUGIN_BASENAME', plugin_basename(
    MY_EVENT_ORGANISER_PLUGIN ) );
define( 'MY_EVENT_ORGANISER_PLUGIN_NAME', trim( dirname(
    MY_EVENT_ORGANISER_PLUGIN_BASENAME ), '/' ) );
// Folder structure
define( 'MY_EVENT_ORGANISER_PLUGIN_DIR', untrailingslashit( dirname( MY_EVENT_ORGANISER_PLUGIN ) ) );
define( 'MY_EVENT_ORGANISER_PLUGIN_INCLUDES_DIR',
    MY_EVENT_ORGANISER_PLUGIN_DIR . '/includes' );
define( 'MY_EVENT_ORGANISER_PLUGIN_MODEL_DIR',
    MY_EVENT_ORGANISER_PLUGIN_INCLUDES_DIR . '/model' );
define( 'MY_EVENT_ORGANISER_PLUGIN_ADMIN_DIR',
    MY_EVENT_ORGANISER_PLUGIN_DIR . '/admin' );
define( 'MY_EVENT_ORGANISER_PLUGIN_ADMIN_VIEWS_DIR',
    MY_EVENT_ORGANISER_PLUGIN_ADMIN_DIR . '/views' );
?>