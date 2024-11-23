<?php

spl_autoload_register(function($class) {

  $file = __DIR__ . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

  if (file_exists($file)) {
    require_once $file;
  }
});


$mario = new Nintendo\Mario();
$luigi = new Nintendo\Luigi();
$bowser = new Nintendo\Bowser();
$toad = new Nintendo\Toad();

$batman = new DCComics\Batman();
$jocker = new DCComics\Jocker();
$robin = new DCComics\Robin();