<?php

// application runs in the Framework namespace
namespace Framework;

// Bootstrap framework and application settings
include_once 'class/Framework/Config.php';
Config::setPath(__DIR__ . '/config/');

// Load the class autoloader
include Config::get('framework', 'includePath') . 'autoload.php';

// set timezone
date_default_timezone_set(Config::get('application', 'timezone'));

// start user session
session_name(Config::get('application', 'sessionName'));
session_start();
