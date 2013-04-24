<?php
require __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/protect.php";
require_once AppConfig::get('system_dir').'/vendor/markdown/markdown.php';

$readme_path = AppConfig::get('root_dir')."/README.md";
$text = file_get_contents($readme_path);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo AppConfig::get('base_url')?>/statics/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo AppConfig::get('base_url')?>/statics/css/style.css" rel="stylesheet">
    <script src="<?php echo AppConfig::get('base_url')?>/statics/js/jquery-1.8.1.min.js"></script>
    <script src="<?php echo AppConfig::get('base_url')?>/statics/js/bootstrap.js"></script>
  </head>
  <body class="manager-home">
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          <?php echo Markdown($text)?>
        </div>
      </div>
    </div>
  </body>
</html>
