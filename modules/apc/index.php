<?php
require __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/master.php";
require AppConfig::get('system_dir')."/include/protect.php";

$apc_params = AppConfig::get('nodes/'.$_GET['feature'].'/params');

$content = AppFunctions::httpRequestForNode('GET', $apc_params['node_url'], $_GET);
$content = preg_replace('/\/nodes\/apc\/\index\.php/', $_SERVER['SCRIPT_URL'], $content);
echo $content;