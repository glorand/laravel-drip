<?php

namespace Glorand\Drip\Laravel;

use Illuminate\Support\Facades\Facade;

class DripFacade extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'drip';
    }
}