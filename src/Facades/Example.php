<?php

namespace Tefabi\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tefabi\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Tefabi\Example\Example::class;
    }
}
