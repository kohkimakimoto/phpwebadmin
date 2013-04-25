<?php
require __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/protect.php";
require_once AppConfig::get('system_dir').'/vendor/markdown/markdown.php';

$readme_path = AppConfig::get('root_dir')."/README.md";
$text = file_get_contents($readme_path);

$hosts = AppHost::getAll();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo AppConfig::get('base_url')?>/statics/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo AppConfig::get('base_url')?>/statics/css/style.css" rel="stylesheet">
    <script src="<?php echo AppConfig::get('base_url')?>/statics/js/jquery-1.8.1.min.js"></script>
    <script src="<?php echo AppConfig::get('base_url')?>/statics/js/bootstrap.js"></script>
  </head>
  <body class="manager-home">
    <div class="content-front">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span3">
            <ul class="nav nav-list">
              <li class="nav-header">Managed hosts</li>
              <?php foreach ($hosts as $host):?>
                <li><a href="<?php echo AppConfig::get('base_url')?>/modules/manager/host.php?hostname=<?php echo $host->getName()?>"><?php echo $host->getName()?></a></li>
              <?php endforeach;?>
            </ul>
          </div>
          <div class="span9">
            <?php echo Markdown($text)?>
          </div>
        </div>
      </div>
    </div>
    <div class="content-background">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span3">
          </div>
          <div class="span9">
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
