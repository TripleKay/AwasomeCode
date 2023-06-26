<?php

namespace TripleKay\AwasomeCode;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TripleKay\AwasomeCode\Skeleton\SkeletonClass
 */
class AwasomeCodeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'awasomecode';
    }
}
