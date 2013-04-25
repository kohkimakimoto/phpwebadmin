<?php
return array(
  'hosts' => array(

    /*
     * Managed hosts configurations.
     */

    'localhost'     => array(
      'description' => 'This is a localhost.',
      'features'     => array(
        'mysql'    => array(
          'module' => 'adminer'
        ),
        'memcache' => array(
          'module' => 'memcache'
        ),
      ),
    ),

    'web-sample1' => array(
        'description' => 'web-sample1',
        'modules'     => array(),
    ),

    'web-sample2' => array(
        'description' => 'web-sample1',
        'modules'     => array(),
    ),

    'web-sample3' => array(
        'description' => 'web-sample1',
        'modules'     => array(),
    ),

  )
);