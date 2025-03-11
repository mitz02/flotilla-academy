<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
if ($uri === '/flotilla/') {
    require "controllers/index.php";
} elseif ($uri === '/flotilla/about') {
    require "controllers/about.php";
}

elseif ($uri === '/flotilla/login') {
    require "controllers/login.php";
}

elseif ($uri === '/flotilla/register') {
    require "controllers/register.php";
}
elseif ($uri === '/flotilla/contact') {
    require "controllers/contact.php";
}

elseif ($uri === '/flotilla/shopping-cart') {
    require "controllers/shopping-cart.php";
}
else {
    require "controllers/404.php";
}


