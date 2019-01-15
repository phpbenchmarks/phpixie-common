<?php

return array(
    'type'      => 'group',
    'defaults'  => array('action' => 'default'),
    'resolvers' => array(
        
        'action' => array(
            'path' => '.*',
            'defaults' => array('processor' => 'benchmark', 'action' => 'greet')
        )
    )
);
