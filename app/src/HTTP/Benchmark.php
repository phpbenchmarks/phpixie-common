<?php

namespace Project\App\HTTP;

use PHPixie\HTTP\Request;
use \PHPixie\DefaultBundle\HTTP\Processor;

/**
 * Benchmark
 */
class Benchmark extends Processor
{
    /**
     * Default action
     * @param Request $request HTTP request
     * @return mixed
     */
    public function helloworldAction($request)
    {
        return 'Hello World !';
    }
}
