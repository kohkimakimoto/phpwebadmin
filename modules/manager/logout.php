<?php
// Bootstrap
require __DIR__."/../../system/bootstrap.php";

wasess::set_authenticated(false);
wafunc::redirect(wafunc::get_base_url()."/");
