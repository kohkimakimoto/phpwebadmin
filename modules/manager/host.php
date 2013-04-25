<?php
require __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/protect.php";
require_once AppConfig::get('system_dir').'/vendor/markdown/markdown.php';

$hosts = AppHost::getAll();
$currentHost = AppHost::getInstanceByName($_GET['hostname']);
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
            <h1><?php echo $currentHost->getName()?></h1>
            <div class="section">
              <?php echo $currentHost->getOption('description')?>
            </div>
            <div class="section">
              <h2>Features</h2>
              <table class="table table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Module</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($currentHost->getFeatures() as $feature):?>
                <tr>
                  <td style="width: 1%;">
                    <a href="<?php echo AppConfig::get('base_url')?>/modules/<?php echo $feature->getModule()->getName()?>/index.php?feature=<?php echo $feature->getKey()?>"><?php echo $feature->getName()?></a>
                  </td>
                  <td>
                    <?php echo $feature->getModule()->getName()?>
                  </td>
                  <td>
                    <?php //echo $feature->getOption('description')?>
                  </td>
                </tr>
              <?php endforeach;?>
              </tbody>
              </table>
            </div>
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
