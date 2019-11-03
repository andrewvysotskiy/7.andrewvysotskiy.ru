<?php
// HTTP
define('HTTP_SERVER', 'http://7.andrewvysotskiy.ru/');

// HTTPS
define('HTTPS_SERVER', 'http://7.andrewvysotskiy.ru/');

// DIR
define('DIR_APPLICATION', '/home/bhx20857/7.andrewvysotskiy.ru/catalog/');
define('DIR_SYSTEM', '/home/bhx20857/7.andrewvysotskiy.ru/system/');
define('DIR_IMAGE', '/home/bhx20857/7.andrewvysotskiy.ru/image/');
define('DIR_STORAGE', '/home/bhx20857/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'bhx20857_admin');
define('DB_PASSWORD', 'adminxauto1');
define('DB_DATABASE', 'bhx20857_xauto');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');