<?php

defined('APP_PATH') || define('APP_PATH', realpath(__DIR__ . '/application'));

require_once 'application/bootstrap.php';
require_once 'vendor/TestFramework/bootstrap.php';

\TestFramework\Router::start();
