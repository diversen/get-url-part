<?php

include_once "urlPart.php";

// You don't need above statement if you are auto-loading, using
// composer
use \diversen\urlPart;

$urlPart = new urlPart();

var_dump($urlPart->getPart(0));

var_dump(urlPart::get(1));
