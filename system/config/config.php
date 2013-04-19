<?php
/**
 * Config
 *
 * @author kohkimakimoto <kohki.makimoto@gmail.com>
 * @version $Revision$
 */
class Config
{
  /**
   * Array of configuration values.
   * @var unknown
   */
  protected static $config = array();

  /**
   * Load configurations from a file.
   * @param unknown $path
   */
  public static function loadConfig($path)
  {
    if (!file_exists($path)) {
      throw new Exception("Configuration file is not found.");
    }

    $arr = include($path);
    self::$config = array_merge(self::$config, $arr);
  }

  /**
   * Get a config parameter.
   * @param unknown $name
   * @param string $default
   * @return Ambigous <string, unknown, multitype:>
   */
  public static function get($name, $default = null, $delimiter = '/')
  {
    $config = self::$config;
    foreach (explode($delimiter, $name) as $key) {
      $config = isset($config[$key]) ? $config[$key] : $default;
    }
    return $config;
  }

  /**
   * Set a config parameter.
   * @param unknown $name
   * @param unknown $value
   */
  public static function set($name, $value)
  {
    self::$config[$name] = $value;
  }

  public static function delete($name)
  {
    unset(self::$config[$name]);
  }

  /**
   * Get All config parameters.
   * @return multitype:
   */
  public static function getAll()
  {
    return self::$config;
  }

  public static function getAllOnFlatArray($namespace = null, $key = null, $array = null, $delimiter = '/')
  {
    $ret = array();

    if ($array === null) {
      $array = self::$config;
    }

    foreach ($array as $key => $val) {
      if (is_array($val) && $val) {
        if ($namespace === null) {
          $ret = array_merge($ret, self::getAllOnFlatArray($key, $key, $val, $delimiter));
        } else {
          $ret = array_merge($ret, self::getAllOnFlatArray($namespace.$delimiter.$key, $key, $val, $delimiter));
        }
      } else {
        if ($namespace !== null) {
          $ret[$namespace.$delimiter.$key] = $val;
        } else {
          $ret[$key] = $val;
        }
      }
    }

    return $ret;
  }

}
