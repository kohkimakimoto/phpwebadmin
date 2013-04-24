<?php
// Define constants
define('WA_ROOT',         realpath(__DIR__."/.."));
define('WA_SYSTEM_DIR',  WA_ROOT.'/system');
define('WA_CONFIG_DIR',  WA_ROOT.'/config');
define('WA_MODULES_DIR', WA_ROOT.'/modules');
define('WA_STATICS_DIR', WA_ROOT.'/statics');

// Load Libraries
require_once WA_SYSTEM_DIR.'/helper/appfunctions.php';
require_once WA_SYSTEM_DIR.'/config/appconfig.php';

// Loard Config
AppConfig::set('root_dir', AppFunctions::getRootDir());
AppConfig::set('system_dir', AppFunctions::getSystemDir());
AppConfig::set('modules_dir', AppFunctions::getModulesDir());
AppConfig::set('statics_dir', AppFunctions::getStaticsDir());
AppConfig::set('config_dir', AppFunctions::getConfigDir());

AppConfig::loadConfig(AppConfig::get('root_dir')."/config/config.php");
AppConfig::loadConfig(AppConfig::get('root_dir')."/config/passwords.php");
AppConfig::loadConfig(AppConfig::get('root_dir')."/config/servers.php");

// Load Libraries
require_once WA_SYSTEM_DIR.'/helper/appsession.php';

