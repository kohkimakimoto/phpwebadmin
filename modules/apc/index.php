<?php
require __DIR__."/../../system/bootstrap.php";
require wafunc::get_system_dir()."/auth/protect.php";


$apc_config = wafunc::get_config('apc');
define('ADMIN_USERNAME', $apc_config['username']);
define('ADMIN_PASSWORD', $apc_config['password']);

require wafunc::get_system_dir().'/vendor/apc/apc.php';
