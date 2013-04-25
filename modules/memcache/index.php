<?php
require __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/protect.php";

/*
if (isset($_GET['feature'])) {
  $feature = AppConfig::get($_GET['feature']);
  AppSession::setAttribute("modules.memcache.feature", $feature);
} else {
  $feature = AppSession::getAttribute("modules.memcache.feature");
}

if (!$feature) {
  throw new Exception("No feature");
}
*/

define('DATE_FORMAT','Y/m/d H:i:s');
define('GRAPH_SIZE',200);
define('MAX_ITEM_DUMP',50);

$MEMCACHE_SERVERS = AppConfig::get('memcache/servers');

require AppConfig::get('system_dir').'/vendor/memcache/memcache.php';

