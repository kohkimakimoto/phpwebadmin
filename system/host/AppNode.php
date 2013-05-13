<?php
class AppNode
{
  protected $name;

  protected $options;

  public static function getAll()
  {
    $cnodes = AppConfig::get('nodes');
    $nodes = array();
    foreach ($cnodes as $name => $v) {
      $nodes[] = self::getInstanceByName($name);
    }

    return $nodes;
  }

  public static function getInstanceByName($name)
  {
    $nodeoptions = AppConfig::get("nodes/$name");

    $node = new AppNode();
    $node->setName($name);
    $node->setOptions($nodeoptions);

    return $node;
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
    $fs = AppConfig::get('nodes/'.$this->name.'/features');
    if (!$fs) {
      return $features;
    }

    foreach ($fs as $name => $options) {
      $f = new AppFeature();
      $f->setName($name);
      $f->setOptions($options);
      $f->setNode($this);
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