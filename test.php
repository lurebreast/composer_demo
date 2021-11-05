<?php

require __DIR__.'/vendor/autoload.php';

use lurebreast\hello\Hello;

$obj = new Hello();
echo $obj->sayHello();