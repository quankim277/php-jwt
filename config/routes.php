<?php
use Cake\Routing\Router;

Router::plugin(
    'QuanKim/PhpJwt',
    ['path' => '/quan-kim/php-jwt'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);
