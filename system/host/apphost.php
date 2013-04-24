<?php
class AppHost
{
  protected $name;


  public static function getAll()
  {
    $chosts = AppConfig::get('hosts');
    $hosts = array();
    foreach ($chosts as $name => $v) {
      $hosts[] = self::getInstanceByName($name);
    }

    return $hosts;
  }

  public static function getInstanceByName($name)
  {
    $host = new AppHost();
    $host->setName($name);

    return $host;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getModules()
  {
    return AppConfig::get('hosts/'.$this->name.'/modules');
  }

}