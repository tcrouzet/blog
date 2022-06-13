<?php
	
// ** MySQL settings ** //
define('DB_NAME', 'tcrouzet-blog');    // The name of the database
define('DB_USER', 'root');     // Your MySQL username

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('DB_PASSWORD', 'm1d1*09'); // ...and password

define('DB_HOST', 'localhost');    // 99% chance you won't need to change this value

// You can have multiple installations in one database if you give each a unique prefix
$table_prefix  = 'tc_';   // Only numbers, letters, and underscores please!

//require('/home/hebergement/tcrouzet/wp-load.php' );
define('WP_HOME','https://tcrouzet.com');
define('WP_SITEURL','https://tcrouzet.com');
//define('RELOCATE',true);

// Change this to localize WordPress.  A corresponding MO file for the
// chosen language must be installed to wp-includes/languages.
// For example, install de.mo to wp-includes/languages and set WPLANG to 'de'
// to enable German language support.
define ('WPLANG', '');

set_time_limit(60);
define('WP_POST_REVISIONS',false);
define('WP_MEMORY_LIMIT', '256M' ); //default 64

//Disable internal Wp-Cron function  
//define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N0;65KT]}+G+S~2Op6dLK>J-SDb=_L35]wLq!(KZFQ52R?;&Q&+^V,-+<qVFWt<~');
define('SECURE_AUTH_KEY',  'iw?OJWNcaxdk HW>P|bVmgHSkI5W|,+_vsNu<+q-;1R|tZ1*Q#+L+.+(CB+-rt(v');
define('LOGGED_IN_KEY',    '~Mj3k-K.;4Ms+gku%_d;VJ ]2HK;P,D12gmV6<:_,|u{25,-d?)z*OG^I.~,E<MP');
define('NONCE_KEY',        '-a9HcC=C/t*s+xmz+IvW:QEiKEX8mc|-|*MBZSkBDz.;c*~#/FAeE|i2.}1m@98l');
define('AUTH_SALT',        'eW7J7(:A.]VG+ZX@+xOb}uxrM8}y[wDG374s5W5s19KJz}t+)~{LSbiXDjec*FZt');
define('SECURE_AUTH_SALT', '-Qn6n/Lb;i!g}BYf>&m+G+%`~f.C`wU<Dt6LH3(Z)J4xi`3V1eU#|(Lv}$MB> _o');
define('LOGGED_IN_SALT',   'Y4k_:/l%7RIPRmaOp38x sA4i3;DNY?B+n2BU+t].So:}OJhi*H,vT/LTw^8CC%e');
define('NONCE_SALT',       'G<v3xwo63!(a?u12bxq2Y(D$LTQ328v]+;UV}gjM5H]Z!?;G.cqI;B=#H8fu<on<');

//Plug-in
define('WP_CACHE', true); // Added by Cache Enabler

// Enable WP_DEBUG mode
if(false){
	define('WP_DEBUG', true);
	define('SCRIPT_DEBUG', true );
	if(true){
		define('WP_DEBUG_DISPLAY', true );
	}else{
		define('WP_DEBUG_DISPLAY', false );
		//@ini_set('display_errors',0);
		@error_reporting(E_ALL & ~E_NOTICE);
		define('WP_DEBUG_LOG', true); //dans /wp-content/debug.log
	}
}

/* for certain plugins */
//set_time_limit(0);

/* That's all, stop editing! Happy blogging. */

define('ABSPATH', dirname(__FILE__).'/');
require_once(ABSPATH.'wp-settings.php');

?>