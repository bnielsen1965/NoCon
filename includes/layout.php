<?php

/*
 * This determines the overall layout of the page by controlling the
 * sequence in which views that make up the page are loaded.
 * 
 */

include VIEWS_PATH . 'header.php';
include VIEWS_PATH . 'nav.php';
include VIEWS_PATH . $viewName . '.php';
include VIEWS_PATH . 'footer.php';

