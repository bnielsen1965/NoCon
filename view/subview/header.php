<?php

namespace Framework;

/**
 * view header processing before content starts
 */

// set helper variables
Router::$ARGS['PAGE_TITLE'] = Config::get('title') . ' - ' . ucwords(preg_replace(array('|_|', '|-|'), ' ', Router::getViewName()));
Router::$ARGS['SITE_URL'] = Config::get('siteURL');
Router::$ARGS['CSS_URL'] = Config::get('cssURL');
Router::$ARGS['IMG_URL'] = Config::get('imageURL');
