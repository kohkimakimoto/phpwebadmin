<?php
return array(
  'hosts' => array(

    /*
     * Managed hosts configurations.
     */

    'localhost'     => array(
      'description' => 'This is a localhost.',
      'features'     => array(
        'mysql::yourdatabase'    => array(
          'module' => 'adminer'
        ),
        'memcached::localhost' => array(
          'module' => 'memcache',
          'servers' => array(
            'localhost:11211',
          ),
        ),
      ),
    ),

    'web-sample1' => array(
        'description' => 'web-sample1',
        'features'     => array(
        ),
    ),

  )
);