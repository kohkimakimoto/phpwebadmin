<?php
if (wafunc::is_method('post')) {
  $username = @$_REQUEST['username'];
  $password = @$_REQUEST['password'];
  if (wasess::check_password($username, $password)) {
    wasess::set_authenticated(true);
    wafunc::redirect(wafunc::get_base_url()."/");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo wafunc::get_base_url()?>/contents/statics/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo wafunc::get_base_url()?>/contents/statics/css/style.css" rel="stylesheet">
    <script src="<?php echo wafunc::get_base_url()?>/contents/statics/js/jquery-1.8.1.min.js"></script>
    <script src="<?php echo wafunc::get_base_url()?>/contents/statics/js/bootstrap.js"></script>
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 2px;
           -moz-border-radius: 2px;
                border-radius: 2px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }

      .form-signin .form-signin-heading {
        font-size: 21px;
      }

      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>
  </head>
  <body>
    <div class="content-plain">
      <form class="form-signin" action="<?php echo wafunc::get_current_url()?>" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input class="input-block-level" type="text" name="username" placeholder="username" value="" />
        <input class="input-block-level" type="password" name="password" placeholder="password" value="" />

        <button class="btn btn-primary" type="submit">Sign in</button>
      </form>
    </div>
  </body>
</html>
