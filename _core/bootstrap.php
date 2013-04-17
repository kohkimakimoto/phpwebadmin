<?php
// Define constants
define('WA_ROOT',         realpath(__DIR__."/.."));
define('WA_CORE_DIR',     WA_ROOT.'/core');
define('WA_CONTENTS_DIR', WA_ROOT.'/contents');
define('WA_PLUGINS_DIR',  WA_ROOT.'/plugins');

// Load Helper
require_once WA_CORE_DIR.'/helper/wa_functions.php';
require_once WA_CORE_DIR.'/helper/wa_session.php';

// Load Global Config
$wa_config = include wafunc::get_core_dir().'/config/config.php';


