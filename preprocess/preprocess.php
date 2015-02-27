<?php

namespace Framework;

/*
 * Perform any needed processing before layout and views are loaded
 * I.E. process POSTed forms, generate AJAX output in place of the 
 * standard layout and views, etc.
 * 
 */

// use view preprocessor if provided
if (file_exists(Config::get('preprocessPath') . 'viewprocess/' . Router::getViewName() . '.php')) {
    include Config::get('preprocessPath') .  'viewprocess/' . Router::getViewName() . '.php';
}
