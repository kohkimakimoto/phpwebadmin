<?php
// Bootstrap
require __DIR__."/../core/bootstrap.php";

// Authenticate.
require wafunc::get_core_dir()."/auth/protect.php";

// load plugin
require wafunc::get_core_dir().'/manager/home.php';
