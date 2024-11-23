<?php

spl_autoload_register(function($class) {
  require_once "Nintendo/" . $class . ".php";
});

$mario = new Mario();
$luigi = new Luigi();
$bowser = new Bowser();
$toad = new Toad();

$batman = new Batman();
$jocker = new Jocker();
$robin = new Robin();