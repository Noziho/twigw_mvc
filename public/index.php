<?php

use App\Controller\homeController;

require_once __DIR__ . '/../vendor/autoload.php';

(new homeController())->home();