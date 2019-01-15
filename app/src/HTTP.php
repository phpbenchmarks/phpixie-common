<?php

namespace Project\App;

class HTTP extends \PHPixie\DefaultBundle\HTTP
{
    protected $classMap = array(
        'benchmark' => 'Project\App\HTTP\Benchmark'
    );
}
