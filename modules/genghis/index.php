<?php
require_once __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/master.php";
require AppConfig::get('system_dir')."/include/protect.php";

$params = AppConfig::get('nodes/'.$_GET['feature'].'/params');

chdir(__DIR__);
$_SERVER["SCRIPT_FILENAME"] = $_SERVER['SCRIPT_URL'];
$_SERVER["PHP_SELF"] = $_SERVER['SCRIPT_URL'];
$_SERVER["SCRIPT_NAME"] = $_SERVER['SCRIPT_URL'];

require AppConfig::get('system_dir').'/vendor/genghis/genghis.php';

