<?php
class AppFunctions {

  public static function getRootDir()
  {
    return WA_ROOT;
  }

  public static function getSystemDir()
  {
    return WA_SYSTEM_DIR;
  }

  public static function getModulesDir()
  {
    return WA_MODULES_DIR;
  }

  public static function getStaticsDir()
  {
    return WA_STATICS_DIR;
  }

  public static function getConfigDir()
  {
    return WA_CONFIG_DIR;
  }

  public static function redirect($url, $status_code = 302)
  {
    header('HTTP/1.0 '.$status_code);
    header('Location: '.$url);
    exit;
  }

  public static function getCurrentUrl()
  {
    return $_SERVER['REQUEST_URI'];
  }

  public static function getRequestMethod()
  {
    return $_SERVER['REQUEST_METHOD'];
  }

  public static function isMethod($method)
  {
    return strtoupper($method) == self::getRequestMethod();
  }
}
