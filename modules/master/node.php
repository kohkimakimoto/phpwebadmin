<?php
require_once __DIR__."/../../system/bootstrap.php";
require AppConfig::get('system_dir')."/include/master.php";
require AppConfig::get('system_dir')."/include/protect.php";
?>
<?php require AppConfig::get('modules_dir')."/master/_header.php";?>
<?php require AppConfig::get('modules_dir')."/master/_globalnavi.php";?>
<?php
$nodes = AppNode::getAll();
$currentNode = AppNode::getInstanceByName($_GET['nodename']);
$features = $currentNode->getFeatures();
?>
<div class="content-front">
  <div class="container-front">
    <div class="side">
      <?php require AppConfig::get('modules_dir')."/master/_side.php";?>
    </div>
    <div class="main">
      <h1><?php echo $currentNode->getName()?></h1>
      <p>
        <?php echo $currentNode->getOption('description')?>
      </p>
      <h2>Managed features</h2>
      <?php if ($features): ?>
      <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($features as $feature):?>
        <tr>
          <td style="width: 1%;">
            <a target="_blank" href="<?php echo $feature->getUrl()?>">
              <?php echo $feature->getName()?>
            </a>
          </td>
          <td>
            <?php echo $feature->getDescription()?>
          </td>
        </tr>
      <?php endforeach;?>
      </tbody>
      </table>
      <?php endif;?>
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
