<?php

include 'config.php';

session_name(SESSION_NAME);
session_start();


$viewName = DEFAULT_VIEW;

/*
 * Determine view name from passed parameters
 * 
 * NOTE: This assumes that the rewrite rules are in place to convert the pretty URL
 * to an index.php?params={URL parameters} type URL where {URL parameters} is the 
 * slash delimited URL string with the view slug and view parameters from the pretty URL.
 * 
 * I.E.
 * Assuming that the application resides in the public_html/blogpage/ directory and
 * given the following pretty URL...
 * http://mydomain.net/blogpage/welcome/bobby
 * 
 * The rewrite rules should change this URL to...
 * http://mydomain.net/blogpage/index.php?params=welcome/bobby
 * 
 * The first parameter is the view slug, "welcome" while the second parameter will
 * be available in the $params array for use by the welcome.php view script.
 */
if (isset($_GET['params'])) {
    $params = explode('/', $_GET['params']);
    if (!empty($params[0]) && file_exists(VIEWS_PATH . '/'. $params[0] . '.php')) {
        $viewName = $params[0];
        
        // sanitize view name
        $viewName = preg_replace('/[^a-zA-Z0-9\-_]/', '-', $viewName);
    }
}

/*
 * Include any pre-processing scripts here before any views are loaded
 */

include INCLUDES_PATH . 'preprocess.php';


/*
 * Load the page layout
 */
include INCLUDES_PATH . 'layout.php';

