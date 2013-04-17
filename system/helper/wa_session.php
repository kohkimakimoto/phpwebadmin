<?php
class WaSession {

  public static function get_namespace()
  {
    $ns = wafunc::get_config('session_namespace');
    if (empty($ns)) {
      $ns = 'phpwebadmin_session';
    }
    return $ns;
  }

  public static function set_attribute($name, $value)
  {
     $_SESSION[self::get_namespace()][$name] = $value;
  }

  public static function get_attribute($name, $default = null)
  {
    if (isset($_SESSION[self::get_namespace()][$name])) {
      return $_SESSION[self::get_namespace()][$name];
    } else {
      return $default;
    }
  }

  public static function set_authenticated($bool)
  {
    self::set_attribute('authenticated', $bool);
  }

  public static function is_authenticated()
  {
    return self::get_attribute('authenticated', false);
  }

  public static function check_password($username, $password)
  {
    global $wa_passwords;

    $user_password = @$wa_passwords[$username];

    if ($user_password === sha1($password)) {
      return true;
    } else {
      return false;
    }
  }
}

class_alias('WaSession', 'wasess');

session_start();
if (!isset($_SESSION[wasess::get_namespace()])) {
  $_SESSION[wasess::get_namespace()] = array();
}

$wa_passwords = include wafunc::get_core_dir().'/config/passwords.php';


