<?php

// application root
chdir(__DIR__ . '/../../..');

// constants
defined('APP_ENV') or define('APP_ENV', 'test');
defined('APP_DEBUG') or define('APP_DEBUG', true);
require_once getcwd() . '/config/constants.php';
