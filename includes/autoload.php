<?php

// class autoloader
function __autoload($className) {
    if (file_exists(CLASSES_PATH . $className . '.php')) {
        include CLASSES_PATH . $className . '.php';
    }
}
