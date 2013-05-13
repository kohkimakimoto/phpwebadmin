<?php
class AppFeature
{
  protected $name;

  protected $options;

  protected $node;

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

  public function getDescription()
  {
    return @$this->options['description'];
  }

  public function getModule()
  {
    $m = new AppModule();
    $m->setName($this->options['module']);
    return $m;
  }

  public function getParams()
  {
    return $this->options['params'];
  }

  public function setNode($node)
  {
    $this->node = $node;
  }

  public function getNode()
  {
    return $this->node;
  }

  public function getUrl()
  {
    if ($this->getModule()->getName() == 'adminer') {

      $params = $this->getParams();
      $feature_path = $this->getNode()->getName().'/features/'.$this->getName();

      return AppConfig::get('base_url').'/modules/adminer/'.$feature_path.'.php?server='.@$params['server'].'&username='.@$params['username'].'&db='.@$params['db'];

    } elseif ($this->getModule()->getName() == 'memcached') {

      $params = $this->getParams();
      $feature_path = $this->getNode()->getName().'/features/'.$this->getName();

      return AppConfig::get('base_url').'/modules/memcached/'.$feature_path.'.php';

    } elseif ($this->getModule()->getName() == 'apc') {

      $params = $this->getParams();
      $feature_path = $this->getNode()->getName().'/features/'.$this->getName();

      return AppConfig::get('base_url').'/modules/apc/'.$feature_path.'.php';

    } elseif ($this->getModule()->getName() == 'phpinfo') {

        $params = $this->getParams();
        $feature_path = $this->getNode()->getName().'/features/'.$this->getName();

        return AppConfig::get('base_url').'/modules/phpinfo/'.$feature_path.'.php';

    } elseif ($this->getModule()->getName() == 'genghis') {

      $params = $this->getParams();
      $feature_path = $this->getNode()->getName().'/features/'.$this->getName();

      return AppConfig::get('base_url').'/modules/genghis/'.$feature_path.'.php';

    } else {

      return '';
    }

  }

  public function getKey()
  {
    return "hosts/".$this->getNode()->getName()."/features/".$this->getName();
  }
}