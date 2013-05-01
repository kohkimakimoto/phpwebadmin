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

  public function getFeatures()
  {
    $features = array();
    $fs = AppConfig::get('hosts/'.$this->name.'/features');
    if (!$fs) {
      return $features;
    }

    foreach ($fs as $name => $options) {
      $f = new AppFeature();
      $f->setName($name);
      $f->setOptions($options);
      $f->setHost($this);
      $features[] = $f;
    }

    return $features;
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