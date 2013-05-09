<?php
require_once __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/master.php";
require AppConfig::get('system_dir')."/include/protect.php";
?>
<?php require AppConfig::get('modules_dir')."/master/_header.php";?>
<?php require AppConfig::get('modules_dir')."/master/_globalnavi.php";?>
<div class="content-front">
  <div class="container-front">
    <div class="side">
      <?php require AppConfig::get('modules_dir')."/master/_side.php";?>
    </div>
    <div class="main">
      <h1>Dashboard</h1>
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
<?php require AppConfig::get('modules_dir')."/master/_footer.php";?>
