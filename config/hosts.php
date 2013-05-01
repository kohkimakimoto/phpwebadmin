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
          'description' => 'MySQL Database'
        ),

        'memcached' => array(
          'module' => 'memcached',
          'params' => array(
            'servers'   => array('localhost:11211'),
          ),
          'description' => 'Memcached'
        ),
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