<?php
require_once __DIR__.'/../vendor/sfyaml/sfYamlInline.php';
require_once __DIR__.'/../vendor/sfyaml/sfYamlDumper.php';
require_once __DIR__.'/../vendor/sfyaml/sfYamlParser.php';
require_once __DIR__.'/../vendor/sfyaml/sfYaml.php';

/*
 * A part of this file is quorted from the symfony package.
* (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
class AppYaml
{
  public static function parseYamls($configFiles)
  {
    $config = array();
    foreach ($configFiles as $configFile)
    {
      $value = self::parseYaml($configFile);
      $config = self::arrayDeepMerge($config, $values);
    }

    return $config;
  }

  public static function parseYaml($configFile)
  {
    if (!is_readable($configFile)) {
      // can't read the configuration
      throw new Exception(sprintf('Configuration file "%s" does not exist or is not readable.', $configFile));
    }

    // parse our config
    $config = sfYaml::load($configFile);

    if ($config === false) {
      // configuration couldn't be parsed
      throw new Exception(sprintf('Configuration file "%s" could not be parsed', $configFile));
    }

    return null === $config ? array() : $config;
  }

  public static function arrayDeepMerge()
  {
    switch (func_num_args())
    {
      case 0:
        return false;
      case 1:
        return func_get_arg(0);
      case 2:
        $args = func_get_args();
        $args[2] = array();
        if (is_array($args[0]) && is_array($args[1]))
        {
          foreach (array_unique(array_merge(array_keys($args[0]),array_keys($args[1]))) as $key)
          {
            $isKey0 = array_key_exists($key, $args[0]);
            $isKey1 = array_key_exists($key, $args[1]);
            if ($isKey0 && $isKey1 && is_array($args[0][$key]) && is_array($args[1][$key]))
            {
              $args[2][$key] = self::arrayDeepMerge($args[0][$key], $args[1][$key]);
            }
            else if ($isKey0 && $isKey1)
            {
              $args[2][$key] = $args[1][$key];
            }
            else if (!$isKey1)
            {
              $args[2][$key] = $args[0][$key];
            }
            else if (!$isKey0)
            {
              $args[2][$key] = $args[1][$key];
            }
          }
          return $args[2];
        }
        else
        {
          return $args[1];
        }
      default :
        $args = func_get_args();
        $args[1] = self::arrayDeepMerge($args[0], $args[1]);
        array_shift($args);
        return call_user_func_array(array('AppYaml', 'arrayDeepMerge'), $args);
        break;
    }
  }
}