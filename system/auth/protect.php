<?php
if (!wasess::is_authenticated()) {
  wafunc::redirect(wafunc::get_base_url().'/modules/manager/login.php');
}