<?php
if (!AppSession::isAuthenticated()) {
  AppFunctions::redirect(AppConfig::get('base_url').'/modules/manager/login.php');
}