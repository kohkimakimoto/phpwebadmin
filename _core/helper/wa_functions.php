<?php
class WaFunctions {

  public static function get_core_dir()
  {
    return WA_CORE_DIR;
  }

  public static function get_contents_dir()
  {
    return WA_CONTENTS_DIR;
  }

  public static function get_plugins_dir()
  {
    return WA_PLUGINS_DIR;
  }

  public static function get_base_url()
  {
    return self::get_config('base_url');
  }

  public static function get_config($key)
  {
    global $wa_config;
    return isset($wa_config[$key]) ? $wa_config[$key] : null;
  }

  public static function redirect($url, $status_code = 302)
  {
    header('HTTP/1.0 '.$status_code);
    header('Location: '.$url);
    exit;
  }

  public static function get_current_url()
  {
    return $_SERVER['REQUEST_URI'];
  }

  public static function get_request_method()
  {
    return $_SERVER['REQUEST_METHOD'];
  }

  public static function is_method($method)
  {
    return strtoupper($method) == self::get_request_method();
  }



}

class_alias('WaFunctions', 'wafunc');
