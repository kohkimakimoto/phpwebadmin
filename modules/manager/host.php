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
    <link href="<?php echo AppConfig::get('base_url')?>/statics/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo AppConfig::get('base_url')?>/statics/css/style.css" rel="stylesheet">
    <script src="<?php echo AppConfig::get('base_url')?>/statics/js/jquery-1.8.1.min.js"></script>
    <script src="<?php echo AppConfig::get('base_url')?>/statics/js/bootstrap.js"></script>
  </head>
  <body class="default">
    <div class="content-front">
      <div class="container-front">
        <?php include('./_side.php');?>
        <div class="main">
          <h1><?php echo $currentHost->getName()?></h1>
          <p>
          <?php echo $currentHost->getOption('description')?>
          </p>
          <hr/>
          <h2>Managed features</h2>
          <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Module</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($currentHost->getFeatures() as $feature):?>
            <tr>
              <td style="width: 1%;">
                <a href="<?php echo $feature->getUrl()?>">
                  <?php echo $feature->getName()?>
                </a>
              </td>
              <td>
                <?php echo $feature->getDescription()?>
              </td>
              <td>
                <?php echo $feature->getModule()->getName()?>
              </td>
            </tr>
          <?php endforeach;?>
          </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="content-background">
      <div class="container-front">
        <div class="side">
        </div>
        <div class="main">
        </div>
      </div>
    </div>
  </body>
</html>
