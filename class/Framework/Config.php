<?php
/*
* Copyright (C) 2015 Bryan Nielsen - All Rights Reserved
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
* along with cryptUser.  If not, see <http://www.gnu.org/licenses/>.
*/

namespace Framework;

/**
 * Config class provides access to configuration settings.
 * 
 * This class is used to load and access settings that are related to the
 * framework or application. The key/value pairs or stored statically once
 * loaded.
 * 
 * @author Bryan Nielsen <bnielsen1965@gmail.com>
 * @copyright (c) 2015, Bryan Nielsen
 * 
 */
class Config {
    /**
     * @var string The system path where config files are located.
     */
    private static $path;
    
    /**
     * @var type Associative array of configuration settings.
     */
    private static $settings;
    
    
    /**
     * Set the configuration path.
     * 
     * @param string $path The path to the configuration files.
     */
    public static function setPath($path) {
        // make sure path ends with a directory separator
        $path = rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
        
        static::$path = $path;
    }
    
    
    /**
     * Load a configuration file into the configuration settings array.
     * 
     * This will use an include to load the specified configuration file and expects
     * the file to set a variable named $settings that contains the configuration
     * settings to load.
     * 
     * NOTE: The $configName value must not include in the file extension.
     * 
     * @param string $configName The name of the configuration.
     */
    public static function load($configName) {
        $configFile = static::$path . $configName . '.php';
        if ( file_exists($configFile) ) {
            include $configFile;
            
            if (isset($settings) && is_array($settings) ) {
                static::$settings = (isset(static::$settings) ? static::$settings + $settings : $settings);
            }
        }
    }
    
    
    /**
     * Get a configuration settings value.
     * 
     * @param string $parameter The configuration paramter to get.
     * @return mixed The configuration value or null if not set.
     */
    public static function get($parameter) {
        return (isset(static::$settings[$parameter]) ? static::$settings[$parameter] : null);
    }
}
