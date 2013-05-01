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

  public static function httpRequestForNode($method, $url, $params = array())
  {
    $headers = array(
      "Content-Type: application/x-www-form-urlencoded",
      "X-Node-Auth-Token: ".AppConfig::get('node_auth_token'),
    );

    return self::httpRequest($method, $url, $params, $headers);
  }

  public static function httpRequest($method, $url, $params = array(), $headers = array())
  {
    $data = http_build_query($params);
    if (!$headers) {
      $headers = array("Content-Type: application/x-www-form-urlencoded");
    }

    $options = array('http' => array(
        'method' => $method,
        'header'  => implode("\r\n", $headers),
    ));

    if($method == 'GET') {
      $url = ($data != '') ? $url.'?'.$data:$url;
    } else if($method == 'POST') {
      $options['http']['content'] = $data;
    }

    $ret = file_get_contents($url, false, stream_context_create($options));

    return $ret;
  }
}
