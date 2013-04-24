<?php
class AppSession {

  public static function getNamespace()
  {
    $ns = AppConfig::get('session_namespace');
    if (empty($ns)) {
      $ns = 'phpwebadmin_session';
    }
    return $ns;
  }

  public static function setAttribute($name, $value)
  {
     $_SESSION[self::getNamespace()][$name] = $value;
  }

  public static function getAttribute($name, $default = null)
  {
    if (isset($_SESSION[self::getNamespace()][$name])) {
      return $_SESSION[self::getNamespace()][$name];
    } else {
      return $default;
    }
  }

  public static function setAuthenticated($bool)
  {
    self::setAttribute('authenticated', $bool);
  }

  public static function isAuthenticated()
  {
    return self::getAttribute('authenticated', false);
  }

  public static function checkPassword($username, $password)
  {
    $passwords = AppConfig::get('passwords');

    $user_password = @$passwords[$username];

    if ($user_password === sha1($password)) {
      return true;
    } else {
      return false;
    }
  }

}

// start session
session_start();
if (!isset($_SESSION[AppSession::getNamespace()])) {
  $_SESSION[AppSession::getNamespace()] = array();
}

include AppFunctions::getConfigDir().'/passwords.php';


