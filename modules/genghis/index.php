<?php
require_once __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/master.php";
require AppConfig::get('system_dir')."/include/protect.php";

$params = AppConfig::get('hosts/'.$_GET['feature'].'/params');

require AppConfig::get('system_dir').'/vendor/genghis/genghis.php';

