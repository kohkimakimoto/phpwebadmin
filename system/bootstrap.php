<?php
// Define constants
define('WA_ROOT',         realpath(__DIR__."/.."));
define('WA_SYSTEM_DIR',  WA_ROOT.'/system');
define('WA_CONFIG_DIR', WA_ROOT.'/config');
define('WA_MODULES_DIR', WA_ROOT.'/modules');
define('WA_STATICS_DIR', WA_ROOT.'/statics');

// Load Helper
require_once WA_SYSTEM_DIR.'/helper/wa_functions.php';
require_once WA_SYSTEM_DIR.'/helper/wa_session.php';

// Load Class
require_once wafunc::get_system_dir().'/config/config.php';
Config::loadConfig(wafunc::get_root_dir()."/config/servers.php");

// Load Global Config
$wa_config = include wafunc::get_config_dir().'/config.php';



