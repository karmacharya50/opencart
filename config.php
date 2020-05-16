<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/pharma/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/pharma/');

// DIR
define('DIR_APPLICATION', 'D:/xampp/htdocs/pharma/catalog/');
define('DIR_SYSTEM', 'D:/xampp/htdocs/pharma/system/');
define('DIR_IMAGE', 'D:/xampp/htdocs/pharma/image/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_SYSTEM . 'storage/cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM . 'storage/download/');
define('DIR_LOGS', DIR_SYSTEM . 'storage/logs/');
define('DIR_MODIFICATION', DIR_SYSTEM . 'storage/modification/');
define('DIR_UPLOAD', DIR_SYSTEM . 'storage/upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'pharma');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');