<?php
// Bootstrap
require_once __DIR__."/../../system/bootstrap.php";

require AppConfig::get('system_dir')."/include/master.php";

AppSession::setAuthenticated(false);
AppFunctions::redirect(AppConfig::get('base_url')."/");
