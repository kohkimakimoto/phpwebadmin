<?php
if (!defined('WA_ROOT')) {
  die('-1');
}

$nodename = @$_GET['nodename'];
$nodes = AppNode::getAll();
?>
<div class="side">
<ul class="nav nav-list">
<li class="<?php echo ('/index.php' == $_SERVER["SCRIPT_NAME"]) ? 'active' : '';?>"><a href="<?php echo AppConfig::get('config/base_url')?>/">Dashboard</a></li>
<li class="nav-header">Managed nodes</li>
  <?php foreach ($nodes as $node):?>
    <li class="<?php echo ($nodename == $node->getName()) ? 'active' : '';?>"><a href="<?php echo AppConfig::get('config/base_url')?>/modules/master/node.php?nodename=<?php echo $node->getName()?>"><?php echo $node->getName()?></a></li>
  <?php endforeach;?>
</ul>
</div>



