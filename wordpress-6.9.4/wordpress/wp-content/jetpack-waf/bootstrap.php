<?php
define( 'DISABLE_JETPACK_WAF', false );
if ( defined( 'DISABLE_JETPACK_WAF' ) && DISABLE_JETPACK_WAF ) return;
define( 'JETPACK_WAF_MODE', 'silent' );
define( 'JETPACK_WAF_SHARE_DATA', false );
define( 'JETPACK_WAF_SHARE_DEBUG_DATA', false );
define( 'JETPACK_WAF_DIR', 'C:\\Users\\lydii\\Desktop\\xamp\\htdocs\\Mentes-fuera-de-norma\\wordpress-6.9.4\\wordpress/wp-content/jetpack-waf' );
define( 'JETPACK_WAF_WPCONFIG', 'C:\\Users\\lydii\\Desktop\\xamp\\htdocs\\Mentes-fuera-de-norma\\wordpress-6.9.4\\wordpress/wp-content/../wp-config.php' );
define( 'JETPACK_WAF_ENTRYPOINT', 'rules/rules.php' );
require_once 'C:\\Users\\lydii\\Desktop\\xamp\\htdocs\\Mentes-fuera-de-norma\\wordpress-6.9.4\\wordpress\\wp-content\\plugins\\jetpack/vendor/autoload.php';
Automattic\Jetpack\Waf\Waf_Runner::initialize();
