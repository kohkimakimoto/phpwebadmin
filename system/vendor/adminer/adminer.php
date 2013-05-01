<?php
function adminer_object() {
  // required to run any plugin
  include_once __DIR__."/plugins/plugin.php";

  // autoloader
  foreach (glob(__DIR__."/plugins/*.php") as $filename) {
    include_once $filename;
  }

  $plugins = array(
      // specify enabled plugins here
      new AdminerFrames(),
      new AdminerVersionNoverify(),
      //new AdminerLoginServers(AppConfig::get('adminer/servers', array())),
  );

  /* It is possible to combine customization and plugins:
   class AdminerCustomization extends AdminerPlugin {
  }
  return new AdminerCustomization($plugins);
  */

  return new AdminerExtention($plugins);
}
// include original Adminer or Adminer Editor
include __DIR__."/adminer-3.6.3.php";
?>