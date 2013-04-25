<?php
class AppFeature
{
  protected $name;
  protected $options;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOptions($options)
  {
    $this->options = $options;
  }

  public function getOptions()
  {
    return $this->options;
  }

  public function getModule()
  {
    $m = new AppModule();
    $m->setName($this->options['module']);

    return $m;
  }
}