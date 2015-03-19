<?php
/*
* Copyright (C) 2014, 2015 Bryan Nielsen - All Rights Reserved
*
* Author: Bryan Nielsen <bnielsen1965@gmail.com>
*
*
* This file is part of the NoCon PHP application framework.
* NoCon is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
* 
* NoCon is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with this application.  If not, see <http://www.gnu.org/licenses/>.
*/

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

// load the requested view using the standard preprocessor and layout
Router::loadView();
