<?php
require __DIR__."/../../system/bootstrap.php";
require wafunc::get_system_dir()."/auth/protect.php";


$memcache_config = wafunc::get_config('apc');
define('ADMIN_USERNAME', $memcache_config['username']);
define('ADMIN_PASSWORD', $memcache_config['password']);

define('DATE_FORMAT','Y/m/d H:i:s');
define('GRAPH_SIZE',200);
define('MAX_ITEM_DUMP',50);

require wafunc::get_system_dir().'/vendor/memcache/memcache.php';
