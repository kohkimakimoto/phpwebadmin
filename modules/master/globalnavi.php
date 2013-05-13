<?php
require_once __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/master.php";
require AppConfig::get('system_dir')."/include/protect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo AppConfig::get('title')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo AppConfig::get('base_url')?>/statics/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo AppConfig::get('base_url')?>/statics/css/style.css" rel="stylesheet">
    <script src="<?php echo AppConfig::get('base_url')?>/statics/js/jquery-1.8.1.min.js"></script>
    <script src="<?php echo AppConfig::get('base_url')?>/statics/js/bootstrap.js"></script>
    <style type="text/css">
    html {
     overflow-y: visible;
     height: 30px;
    }
    </style>
  </head>
  <body>
  <div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
      <div class="container-fluid">
        <ul class="nav">
          <li class=""><a target="_top" href="<?php echo AppConfig::get('base_url')?>/">Home</a></li>
        </ul>
        <ul class="nav pull-right">
          <li>
            <a target="_top" href="<?php echo AppConfig::get('base_url')."/modules/master/logout.php"?>">
            <i class="icon-off icon-white"></i>
            Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(function(){

    });
  </script>
</body>
</html>