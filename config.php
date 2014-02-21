<?php

// application timezone
date_default_timezone_set('UTC');

// application settings
define('DEFAULT_TITLE', 'NoCon Framework'); // site title
define('DEFAULT_VIEW', 'home'); // default view page to load (without .php)
define('SESSION_NAME', 'nocon'); // PHP session name for cookie

/*
 * Dynamic settings detection. Try static define settings for the URL_DOMAIN and
 * URL_PATH settings if the dynamic detection does not work.
 */
$dynamicDomain = $_SERVER['HTTP_HOST'];
$dynamicPath = pathinfo($_SERVER['PHP_SELF'], PATHINFO_DIRNAME);
if (substr($dynamicPath, 0, 1) != '/') $dynamicPath = '/' . $dynamicPath;
if (substr($dynamicPath, -1) != '/') $dynamicPath .= '/';

// domain and path parts of URLs
define('URL_DOMAIN', $dynamicDomain); // domain where site resides
define('URL_PATH', $dynamicPath); // URL path where site resides, begins and ends with slash

// common URLs
define('SITE_URL', 'http' . (!empty($_SERVER['HTTPS']) ? 's' : '') . '://' . URL_DOMAIN . URL_PATH);
define('CSS_URL', SITE_URL . 'css/');
define('JS_URL', SITE_URL . 'js/');
define('IMAGES_URL', SITE_URL . 'images/');

// define applicaton path constants
define('SITE_PATH', dirname(__FILE__) . '/');
define('VIEWS_PATH', SITE_PATH . 'views/');
define('INCLUDES_PATH', SITE_PATH . 'includes/');
define('CLASSES_PATH', SITE_PATH . 'classes/');
define('CACHE_PATH', SITE_PATH . 'cache/');

