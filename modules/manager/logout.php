<?php
// Bootstrap
require __DIR__."/../../system/bootstrap.php";

AppSession::setAuthenticated(false);
AppFunctions::redirect(AppConfig::get('base_url')."/");
