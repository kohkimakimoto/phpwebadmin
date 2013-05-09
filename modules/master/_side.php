<?php
if (!defined('WA_ROOT')) {
  die('-1');
}

$hostname = @$_GET['hostname'];
$hosts = AppHost::getAll();
?>
<div class="side">
<ul class="nav nav-list">
<li class="<?php echo ('/index.php' == $_SERVER["SCRIPT_NAME"]) ? 'active' : '';?>"><a href="<?php echo AppConfig::get('base_url')?>/">Dashboard</a></li>
<li class="nav-header">Managed hosts</li>
  <?php foreach ($hosts as $host):?>
    <li class="<?php echo ($hostname == $host->getName()) ? 'active' : '';?>"><a href="<?php echo AppConfig::get('base_url')?>/modules/master/host.php?hostname=<?php echo $host->getName()?>"><?php echo $host->getName()?></a></li>
  <?php endforeach;?>
</ul>
</div>



