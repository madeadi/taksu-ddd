<?php

namespace Taksu\DDD\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Taksu\DDD\DDD
 */
class DDD extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ddd';
    }
}
