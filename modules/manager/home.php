<?php
require __DIR__."/../../system/bootstrap.php";
require wafunc::get_system_dir()."/auth/protect.php";
require_once wafunc::get_system_dir().'/vendor/markdown/markdown.php';

$readme_path = wafunc::get_root_dir()."/README.md";
$text = file_get_contents($readme_path);

$servers = Config::get('servers');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo wafunc::get_base_url()?>/statics/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo wafunc::get_base_url()?>/statics/css/style.css" rel="stylesheet">
    <script src="<?php echo wafunc::get_base_url()?>/statics/js/jquery-1.8.1.min.js"></script>
    <script src="<?php echo wafunc::get_base_url()?>/statics/js/bootstrap.js"></script>
  </head>
  <body class="manager-home">
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <ul class="nav nav-tabs nav-stacked">

            <?php foreach ($servers as $name => $server):?>
              <li><a href="#"><?php echo $name;?></a></li>
            <?php endforeach;?>
          </ul>
        </div>
        <div class="span9">
          <?php echo Markdown($text)?>
        </div>
      </div>

    </div>
  </body>
</html>
