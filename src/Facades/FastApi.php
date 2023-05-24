<?php

namespace Tetra\FastApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tetra\FastApi\FastApi
 */
class FastApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Tetra\FastApi\FastApi::class;
    }
}
