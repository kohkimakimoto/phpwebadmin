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

        'apc' => array(
          'module' => 'apc',
          'params' => array(
              'node_url'   => 'http://phpwebadmin.localdomain:8080/nodes/apc/index.php',
          ),
          'description' => 'apc information'
        ),

        'php' => array(
          'module' => 'phpinfo',
          'params' => array(
            'node_url'   => 'http://phpwebadmin.localdomain:8080/nodes/phpinfo/index.php',
          ),
          'description' => 'php information'
        ),
        'genghis' => array(
            'module' => 'genghis',
            'params' => array(

            ),
            'description' => 'genghis'
        ),
      ),
    ),

    'hoge_server1'     => array(
      'description' => 'hoge_server1 server.',
    ),

    'hoge_server2'     => array(
      'description' => 'hoge_server2 server.',
    ),
  ),
);