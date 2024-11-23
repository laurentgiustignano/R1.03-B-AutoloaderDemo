<?php

class Autoloader {
  static function register() {
    spl_autoload_register(array(__CLASS__, 'autoload'));
  }

  static function autoload($class_name) {

    $class_path = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);

    $file = __DIR__ . '/' . $class_path . '.php';

    if(file_exists($file)) {
      require $file;
    }
  }
}