<?php
# Database Configuration
define( 'DB_NAME', 'wp_victoriaedgar' );
define( 'DB_USER', 'victoriaedgar' );
define( 'DB_PASSWORD', 'R5uMQDsrRVLKLwfpeAQX' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'W+pK4izYC3#^=-|XZ+yw_Iwzt91i:toR+Yzx_XxL$S+F8E9:%l$Y,|ohG@TUL4zw');
define('SECURE_AUTH_KEY',  '[u(=Y(<!*]zy-PI3}s3(mdb$:`4z,XyOAs%xK9ECHhsL0AY/~EB+slhJ]|imEl*:');
define('LOGGED_IN_KEY',    'GmY9!$dLE&P><gblCqN|{-Y(61[#xo|-G0|VakS&}L|&.sstzLx<tp 6ZtVs8iSt');
define('NONCE_KEY',        'ONy->>K`G/Fo8h5x}J0%?/&Tr^|Cv7HQjMB9A @C-r~(XU*J]f;>Z|dpNO-Uu=yA');
define('AUTH_SALT',        'JX>8Ap88Zy(fs>jJajwjb7iv|G<-&Lm<6CCdCRa89Lv~Kf,Q#<0b~ih7TrK^IePS');
define('SECURE_AUTH_SALT', 'fime++xYH}353H9z.x=R:9Vgz~Zr:.h(P|h+Ip&CLfd+r5b~MygAjF$gd^fTU+aa');
define('LOGGED_IN_SALT',   ';!0T=..Q9F[oItqdpVrSS<TCjR:@(A1fB,1>Ci6*`(=OLRhLK:;,NQz&iT8:#*]_');
define('NONCE_SALT',       '~1+xJC?wTs2w!:sy9RQ:~3_M}QVpe4UAVh$I@Pl(1|*-oZFk`V,jgbb_`HXo;%/@');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'victoriaedgar' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '67906cfb56803c51788d668cca9c075fa257ee7b' );

define( 'WPE_CLUSTER_ID', '100947' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'victoriaedgar.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100947', );

$wpe_special_ips=array ( 0 => '104.196.246.48', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
