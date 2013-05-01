<?php
$nodetoken = @$_SERVER["HTTP_X_NODE_AUTH_TOKEN"];
if ($nodetoken != AppConfig::get('node_auth_token')) {
  die('-1');
}