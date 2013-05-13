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
      <?php
      $nodes = AppNode::getAll();
      ?>
      <div class="itemcontainer">
      <?php foreach ($nodes as $node):?>
        <?php foreach ($node->getFeatures() as $feature):?>
        <div class="item"><div class="itemInner">
          <h4><a target="_blank" href="<?php echo $feature->getUrl()?>"><?php echo $feature->getName()?></a></h4>
          <div><?php echo $node->getName()?></div>
        </div></div>
        <?php endforeach;?>
      <?php endforeach;?>
       </div>
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
<script>
$(function(){
  var $container = $('.itemcontainer');
  $container.imagesLoaded(function(){
    $container.masonry();
  });
});
</script>
<?php require AppConfig::get('modules_dir')."/master/_footer.php";?>
