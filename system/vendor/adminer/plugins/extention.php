<?php
class AdminerExtention extends AdminerPlugin {

  function credentials() {
    return array(ADMINER_SERVER, ADMINER_USERNAME, ADMINER_PASSWORD);
  }

}