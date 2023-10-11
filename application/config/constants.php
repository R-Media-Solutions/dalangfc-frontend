<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/*
|--------------------------------------------------------------------------
| Website Title
|--------------------------------------------------------------------------
*/
define('TITLE',                 "DALANG FC BOGOR");
define('DOMAIN_NAME',           "dalangfcbogor.rmediasolutionsid.com");
define('COMPANY_NAME',          "Dalang FC Bogor");
define('COMPANY_PHONE',         "+62 857 1234 1234");
define('COMPANY_WA',            "+62 857 1234 1234");
define('COMPANY_ADDRESS',       "Jl. Pangeran Sogiri Jp.Selaawi RT03/RW03");
define('COMPANY_EMAIL',         "admin@" . DOMAIN_NAME);

/*
|--------------------------------------------------------------------------
| Server/Base URL
|--------------------------------------------------------------------------
*/
define('SCHEMA', (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://");
define('BASE_URL', SCHEMA . (isset($_SERVER["SERVER_NAME"]) ? $_SERVER["SERVER_NAME"] : '') . '/');
/*
|--------------------------------------------------------------------------
| Document Root Path
|--------------------------------------------------------------------------
*/
define('ROOTPATH', rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/');

/*
|--------------------------------------------------------------------------
| APP and Assets  Folder Name
|--------------------------------------------------------------------------
*/
define('APP_FOLDER',                'application');
define('ASSET_FOLDER',              'assets');

/*
|--------------------------------------------------------------------------
| Product System Package
|--------------------------------------------------------------------------
*/
defined('ELPRO_PACKAGE_BRONZE')      or define('ELPRO_PACKAGE_BRONZE', 1);
defined('ELPRO_PACKAGE_SILVER')      or define('ELPRO_PACKAGE_SILVER', 2);
defined('ELPRO_PACKAGE_GOLD')        or define('ELPRO_PACKAGE_GOLD', 3);
defined('ELPRO_PACKAGE_TYPE')        or define('ELPRO_PACKAGE_TYPE', ELPRO_PACKAGE_BRONZE);

/*
|--------------------------------------------------------------------------
| Page Settings
|--------------------------------------------------------------------------
*/
define('VIEW_AUTH',                 'auth/');
define('VIEW_BACK',                 'backend/');
define('VIEW_FRONT',                'frontend/');
define('VIEW_COMING_SOON',          'comingsoon/');
define('VIEW_MAINTENANCE',          'maintenance/');
define('VIEW_PATH',                 str_replace("\\", "/", VIEWPATH));

/*
|--------------------------------------------------------------------------
| Assets Path Settings
|--------------------------------------------------------------------------
*/
define('ASSET_PATH',                BASE_URL . ASSET_FOLDER . '/');
define('PROFILE_IMG',               BASE_URL . ASSET_FOLDER . '/upload/profile/');
define('PROFILE_IMG_PATH',          './'     . ASSET_FOLDER . '/upload/profile/');
define('PRODUCT_IMG',               BASE_URL . ASSET_FOLDER . '/upload/product/');
define('PRODUCT_IMG_PATH',          './'     . ASSET_FOLDER . '/upload/product/');
define('PAYMENT_IMG',               BASE_URL . ASSET_FOLDER . '/upload/payment/');
define('PAYMENT_IMG_PATH',          './'     . ASSET_FOLDER . '/upload/payment/');
define('IDCARD_IMG',                BASE_URL . ASSET_FOLDER . '/upload/id_card/');
define('IDCARD_IMG_PATH',           './'     . ASSET_FOLDER . '/upload/id_card/');
define('COVER_IMG',                 BASE_URL . ASSET_FOLDER . '/upload/cover/');
define('COVER_IMG_PATH',            './'     . ASSET_FOLDER . '/upload/cover/');
define('LOGO_RESELLER_IMG',         BASE_URL . ASSET_FOLDER . '/upload/logo/');
define('LOGO_RESELLER_IMG_PATH',    './'     . ASSET_FOLDER . '/upload/logo/');
define('ABOUTHISTORY_IMG',          BASE_URL . ASSET_FOLDER . '/upload/abouthistory/');
define('ABOUTHISTORY_IMG_PATH',     './'     . ASSET_FOLDER . '/upload/abouthistory/');
define('SERVICES_IMG',              BASE_URL . ASSET_FOLDER . '/upload/services/');
define('SERVICES_IMG_PATH',         './'     . ASSET_FOLDER . '/upload/services/');
define('CLIENT_IMG',                BASE_URL . ASSET_FOLDER . '/upload/client/');
define('CLIENT_IMG_PATH',           './'     . ASSET_FOLDER . '/upload/client/');
define('PAGEHOME_IMG',              BASE_URL . ASSET_FOLDER . '/upload/home/');
define('PAGEHOME_IMG_PATH',         './'     . ASSET_FOLDER . '/upload/home/');

/*
|--------------------------------------------------------------------------
| Backend Assets Path Settings
|--------------------------------------------------------------------------
*/
define('BE_CSS_PATH',               BASE_URL . ASSET_FOLDER . '/backend/css/');
define('BE_JS_PATH',                BASE_URL . ASSET_FOLDER . '/backend/js/');
define('BE_IMG_PATH',               BASE_URL . ASSET_FOLDER . '/backend/img/');
define('BE_IMG_PATH_NB',            './' . ASSET_FOLDER . '/backend/img/');
define('BE_TREE_PATH',              BASE_URL . ASSET_FOLDER . '/backend/img/tree/');
define('BE_PLUGIN_PATH',            BASE_URL . ASSET_FOLDER . '/backend/plugins/');
define('LOGO_IMG',                  BE_IMG_PATH . 'logo.png');
define('LOGO_IMG2',                 BE_IMG_PATH . 'logo2.png');
define('FAVICON',                   BE_IMG_PATH . 'favicon.png');

/*
|--------------------------------------------------------------------------
| Frontend Assets Path Settings
|--------------------------------------------------------------------------
*/
define('FE_CSS_PATH',               BASE_URL . ASSET_FOLDER . '/frontend/css/');
define('FE_JS_PATH',                BASE_URL . ASSET_FOLDER . '/frontend/js/');
define('FE_IMG_PATH',               BASE_URL . ASSET_FOLDER . '/frontend/images/');
define('FE_FONTS_PATH',             BASE_URL . ASSET_FOLDER . '/frontend/fonts/');
define('FE_VENDOR_PATH',            BASE_URL . ASSET_FOLDER . '/frontend/vendor/');

/*
|--------------------------------------------------------------------------
| Global Assets Path Settings
|--------------------------------------------------------------------------
*/
define('GLOBAL_PATH',               BASE_URL . ASSET_FOLDER . '/global/');
define('GLOBAL_CSS_PATH',           BASE_URL . ASSET_FOLDER . '/global/css/');
define('GLOBAL_PLUGINS_PATH',       BASE_URL . ASSET_FOLDER . '/global/plugins/');

/*
|--------------------------------------------------------------------------
| Coming Soon and Maintenance Assets Path Settings
|--------------------------------------------------------------------------
*/
define('COMINGSOON_CSS_PATH',       BASE_URL . ASSET_FOLDER . '/comingsoon/css/');
define('COMINGSOON_JS_PATH',        BASE_URL . ASSET_FOLDER . '/comingsoon/js/');
define('MAINTENANCE_CSS_PATH',      BASE_URL . ASSET_FOLDER . '/maintenance/css/');
define('MAINTENANCE_JS_PATH',       BASE_URL . ASSET_FOLDER . '/maintenance/js/');

/*
|--------------------------------------------------------------------------
| Encryption / Key Config
|--------------------------------------------------------------------------
*/
define('DEBUG_KEY',         "debug123");
define('ENCRYPTION_KEY',    "q8tNvy4JZ9BS5v8MBG9EvHsjmQ2Y2S"); // is Unique
define('SECRET_IV',         "2456378494765431"); // 16bit
define('ENCRYPT_METHOD',    "aes-256-cbc");

/*
|--------------------------------------------------------------------------
| Member Type
|--------------------------------------------------------------------------
*/
define('ADMINISTRATOR', 1);
define('MEMBER',        2);
define('CUSTOMER',      0);

/*
|--------------------------------------------------------------------------
| Member Type Status
|--------------------------------------------------------------------------
*/
define('TYPE_STATUS_ADMINISTRATOR', 'admin');
define('TYPE_STATUS_STAFF',         'staff');
define('TYPE_STATUS_MEMBER',        'member');
define('TYPE_STATUS_RESELLER',      'reseller');
define('TYPE_STATUS_DROPSHIPPER',   'dropshipper');

/*
|--------------------------------------------------------------------------
| Member Status
|--------------------------------------------------------------------------
*/
define('NONACTIVE',     0);
define('ACTIVE',        1);
define('BANNED',        2);
define('DELETED',       3);

/*
|--------------------------------------------------------------------------
| Reseller Package
|--------------------------------------------------------------------------
*/
defined('PACKAGE_DROPSHIPPER')  or define('PACKAGE_DROPSHIPPER', 'dropshipper');
defined('PACKAGE_STAR1')        or define('PACKAGE_STAR1', 'star1');
defined('PACKAGE_STAR2')        or define('PACKAGE_STAR2', 'star2');
defined('PACKAGE_STAR3')        or define('PACKAGE_STAR3', 'star3');
defined('PACKAGE_STAR4')        or define('PACKAGE_STAR4', 'star4');
defined('PACKAGE_STAR5')        or define('PACKAGE_STAR5', 'star5');


/*
|--------------------------------------------------------------------------
| Faspay SendMe
|--------------------------------------------------------------------------
|
| Fastpay SendMe Location
|
*/
define('FASPAY_SENDME_LIB', realpath(dirname(__FILE__) . '/..') . DIRECTORY_SEPARATOR . '/libraries/faspay/SendMe.php');

/*
|--------------------------------------------------------------------------
| Mailer Engine
|--------------------------------------------------------------------------
|
| Swift Mailer Location
|
*/
define('SWIFT_MAILSERVER', realpath(dirname(__FILE__) . '/..') . DIRECTORY_SEPARATOR . '/libraries/swiftmailer/swift_required.php');

//default ID
define("DEFAULT_LANGUAGE", "id");

//copyright string/HTML
define("COPYRIGHT","&copy;".date("Y")." by RMedia Solutions. All rights reserved.");