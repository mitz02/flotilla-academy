<?php

$uri = $_SERVER['REQUEST_URI'];
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
else {
    require "controllers/404.php";
}


