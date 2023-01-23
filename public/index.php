<?php

use App\Router;
use Symfony\Component\ErrorHandler\Debug;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../Router.php';


Debug::enable();


try {
    Router::route();
}
catch (ReflectionException $e) {
    echo "Une erreur est survenu avec le rooter";
}