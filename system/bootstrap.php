<?php
// Define constants
define('WA_ROOT',         realpath(__DIR__."/.."));
define('WA_SYSTEM_DIR',  WA_ROOT.'/system');
define('WA_CONFIG_DIR',  WA_ROOT.'/config');
define('WA_MODULES_DIR', WA_ROOT.'/modules');
define('WA_STATICS_DIR', WA_ROOT.'/statics');

// Load Libraries
require_once WA_SYSTEM_DIR.'/yaml/AppYaml.php';
require_once WA_SYSTEM_DIR.'/helper/AppFunctions.php';
require_once WA_SYSTEM_DIR.'/config/AppConfig.php';

// Loard Config
AppConfig::set('root_dir',    AppFunctions::getRootDir());
AppConfig::set('system_dir',  AppFunctions::getSystemDir());
AppConfig::set('modules_dir', AppFunctions::getModulesDir());
AppConfig::set('statics_dir', AppFunctions::getStaticsDir());
AppConfig::set('config_dir',  AppFunctions::getConfigDir());

AppConfig::loadConfig(AppConfig::get('root_dir')."/config/config.yml");
AppConfig::loadConfig(AppConfig::get('root_dir')."/config/users.yml");

$nodes = array();
$gfiles = glob(AppConfig::get('root_dir').'/config/nodes/*.yml');
foreach ($gfiles as $file) {
  $arr = AppYaml::parseYaml($file);
  $nodes[$arr['name']] = $arr;
}
AppConfig::set('nodes', $nodes);
unset($nodes);

// Load Libraries
require_once WA_SYSTEM_DIR.'/helper/AppSession.php';
require_once WA_SYSTEM_DIR.'/host/AppFeature.php';
require_once WA_SYSTEM_DIR.'/host/AppModule.php';
require_once WA_SYSTEM_DIR.'/host/AppNode.php';

