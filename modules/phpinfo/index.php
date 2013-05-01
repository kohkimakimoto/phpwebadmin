<?php
require __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/master.php";
require AppConfig::get('system_dir')."/include/protect.php";


$phpinfo_params = AppConfig::get('hosts/'.$_GET['feature'].'/params');

$content = AppFunctions::httpRequestForNode('GET', $phpinfo_params['node_url']);
echo $content;
