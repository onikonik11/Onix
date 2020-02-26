<?php
// HTTP
define('HTTP_SERVER', 'http://myls.ge/admin/');
define('HTTP_CATALOG', 'http://myls.ge/');

// HTTPS
define('HTTPS_SERVER', 'http://myls.ge/admin/');
define('HTTPS_CATALOG', 'http://myls.ge/');

// DIR
define('DIR_APPLICATION', '/home/o/onikonik11/myls.ge/public_html/admin/');
define('DIR_SYSTEM', '/home/o/onikonik11/myls.ge/public_html/system/');
define('DIR_IMAGE', '/home/o/onikonik11/myls.ge/public_html/image/');
define('DIR_STORAGE', dirname(dirname(dirname(__FILE__))).'/storage/');
define('DIR_CATALOG', '/home/o/onikonik11/myls.ge/public_html/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
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
define('DB_USERNAME', 'onikonik11_myls');
define('DB_PASSWORD', 'Onik85erik84');
define('DB_DATABASE', 'onikonik11_myls');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');