<?php
require_once __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/master.php";
require AppConfig::get('system_dir')."/include/protect.php";

$adminer_params = AppConfig::get('nodes/'.$_GET['feature'].'/params');


define('ADMINER_SERVER', $adminer_params['server']);
define('ADMINER_USERNAME', $adminer_params['username']);
define('ADMINER_PASSWORD', $adminer_params['password']);

require AppConfig::get('system_dir').'/vendor/adminer/adminer.php';
