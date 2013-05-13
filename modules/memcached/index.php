<?php
require_once __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/master.php";
require AppConfig::get('system_dir')."/include/protect.php";

$memcached_params = AppConfig::get('nodes/'.$_GET['feature'].'/params');

$MEMCACHE_SERVERS = $memcached_params['servers'];
define('DATE_FORMAT','Y/m/d H:i:s');
define('GRAPH_SIZE',200);
define('MAX_ITEM_DUMP',50);

chdir(__DIR__);
$_SERVER["PHP_SELF"] = $_SERVER['SCRIPT_URL'];
$_SERVER["SCRIPT_NAME"] = $_SERVER['SCRIPT_URL'];

require AppConfig::get('system_dir').'/vendor/memcache/memcache.php';

