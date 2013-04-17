<?php
// Bootstrap
require __DIR__."/../core/bootstrap.php";

wasess::set_authenticated(false);

wafunc::redirect(wafunc::get_base_url()."/");
