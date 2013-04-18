<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo wafunc::get_config('title')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo wafunc::get_base_url()?>/statics/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo wafunc::get_base_url()?>/statics/css/style.css" rel="stylesheet">
    <script src="<?php echo wafunc::get_base_url()?>/statics/js/jquery-1.8.1.min.js"></script>
    <script src="<?php echo wafunc::get_base_url()?>/statics/js/bootstrap.js"></script>
  </head>
  <body>
    <div class="navbar navbar-fixed-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="<?php echo wafunc::get_base_url()?>/"><?php echo wafunc::get_config('title')?></a>
          <ul class="nav">
          <li class="dropdown">
            <li><a class="framelink" href="<?php echo wafunc::get_base_url()?>/modules/adminer/index.php">adminer</a></li>
            <li><a class="framelink" href="<?php echo wafunc::get_base_url()?>/modules/genghis/index.php">genghis</a></li>
            <li><a class="framelink" href="<?php echo wafunc::get_base_url()?>/modules/memcache/index.php">memcached</a></li>

<!--
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a class="framelink" href="<?php echo wafunc::get_base_url()?>/modules/manager/home.php">home</a></li>
                <li class="divider"></li>
                <li><a class="framelink" href="<?php echo wafunc::get_base_url()?>/modules/adminer/index.php">adminer</a></li>
                <li><a class="framelink" href="<?php echo wafunc::get_base_url()?>/modules/genghis/index.php">genghis</a></li>
                <li><a class="framelink" href="<?php echo wafunc::get_base_url()?>/modules/memcache/index.php">memcached</a></li>
              </ul>
            </li>
-->
          </ul>
          <ul class="nav pull-right">
            <li><a href="<?php echo wafunc::get_base_url()."/modules/manager/logout.php"?>">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="content-plain">
      <style>html {overflow-y: hidden;}</style>
      <IFRAME id="mainframe" src="<?php echo wafunc::get_base_url()?>/modules/manager/home.php" name="contentIframe" class="icontent" width="100%" height="100%" frameborder="0" scrolling="auto" >
      </IFRAME>
      <script type="text/javascript">
        $(function(){
          var height = $('html').height();
          $('.icontent').height(height - 40);


          $('.framelink').live('click', function(){

            var href = $(this).attr('href');

            $("#mainframe").attr('src', href);
            $('.dropdown.open').removeClass('open');

            return false;

          });


        });
      </script>
    </div>
  </body>
</html>
