<?php
require __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/protect.php";


$memcache_config = AppConfig::get('memcache');
define('ADMIN_USERNAME', $memcache_config['username']);
define('ADMIN_PASSWORD', $memcache_config['password']);

define('DATE_FORMAT','Y/m/d H:i:s');
define('GRAPH_SIZE',200);
define('MAX_ITEM_DUMP',50);

$MEMCACHE_SERVERS = $memcache_config['servers'];
require AppConfig::get('system_dir').'/vendor/memcache/memcache.php';

