<?php
return array(
  'hosts' => array(
    /*
     * Managed hosts configurations.
     */
    'localhost'     => array(
      'description' => 'This is a localhost.',
      'features'     => array(
        'mysql_yourdatabase' => array(
          'module' => 'adminer',
          'params' => array(
            'server'   => 'localhost',
            'username' => 'user',
            'password' => 'password',
            'db'       => 'yourdatabase',
          ),
          'description' => 'データベース'
        )
      ),
    ),

    'hoge_server1'     => array(
      'description' => '',
    ),

    'hoge_server2'     => array(
        'description' => '',
    ),
  ),
);