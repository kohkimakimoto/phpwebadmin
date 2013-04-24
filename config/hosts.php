<?php
return array(
  'hosts' => array(
    /*
     * Managed hosts configurations.
     */
    'localhost'     => array(
      'description' => 'foo',
      'modules'     => array('adminer', 'genghis', 'memcache'),
    ),

    'web-sample1' => array(
        'description' => 'web-sample1',
        'modules'     => array('adminer'),
    ),

  )
);