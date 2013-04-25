<?php
class AppHost
{
  protected $name;

  protected $options;

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
    $hostoptions = AppConfig::get("hosts/$name");

    $host = new AppHost();
    $host->setName($name);
    $host->setOptions($hostoptions);

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
    $modules = array();
    $ms = AppConfig::get('hosts/'.$this->name.'/modules');
    foreach ($ms as $modulename => $options) {
      $m = new AppModule();
      $m->setName($modulename);
      $m->setOptions($options);
      $modules[] = $m;
    }

    return $modules;
  }

  public function setOptions($options)
  {
    $this->options = $options;
  }

  public function getOptions()
  {
    return $this->options;
  }

  public function getOption($key)
  {
    return @$this->options[$key];
  }

}