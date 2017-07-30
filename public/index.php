<?php

use CMS\Application;
use CMS\Plugins\RoutePlugin;
use CMS\ServiceContainer;

require_once __DIR__ .'/../vendor/autoload.php';

$serviceContainer = new ServiceContainer();

$app = new Application($serviceContainer);

$app->plugin(new RoutePlugin());

$app->get('/',function (){
   echo "Hello word";
});

$app->start();