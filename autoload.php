<?php

function my_autoloader($class) {
    include 'Pieces/' . $class . '.php';
}

spl_autoload_register('my_autoloader');