<?php
if (!AppSession::isAuthenticated()) {
  AppFunctions::redirect(AppConfig::get('base_url').'/modules/master/login.php');
}